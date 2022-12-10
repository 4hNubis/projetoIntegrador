<?php
// Inicia a conexão com o BD Dekas
require_once 'ativaBD.php';
// Ativa SESSAo se não estiver ativa
include_once 'ativaSessao.php';
// Se existir o indice btn_entrar , é porque alguem clicou no botão
if (isset($_POST['btnLogin'])){
    // Array de erros
    // Se erros não iniciado, inicia ele
    if (!isset($_SESSION['erros'])) {
        $_SESSION['erros'] = $erros = array();    
    }
    // Validação
    if(empty($_POST['email']) || empty($_POST['senha'])){
        $_SESSION['erros'] = $erros[] = "O campo login e senha tem que estar preenchidos";
        header('Location: pageUsuarioLogin.php');
    }else{
        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
            $_SESSION['erros'] = $erros[ ]= "Email digitado não é valido";
            header('Location: pageUsuarioLogin.php');
        }elseif(!$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT)){
            $_SESSION['erros'] = $erros[] = "Senha digitada não é valida";
            header('Location: pageUsuarioLogin.php');
        }else{
            // Mysqli_escape_string - função que limpa os dados e evita sqlinjection e outros caracteres indevidos.
            $email = mysqli_escape_string($connect, $email);
            $senha = mysqli_escape_string($connect, $senha);
            // Codigo SQL a ser executado
            $sqlEmail = "SELECT senha FROM usuario WHERE email= '$email' ";
            // Executa o comando SQL, resultando na busca do email desejado
            $resultEmail = mysqli_query($connect,$sqlEmail);
            if (mysqli_num_rows($resultEmail) > 0){
                $dadosLogin = mysqli_fetch_array($resultEmail);
                // Faz a verificação da senha com BCrypt
                if(password_verify($senha,$dadosLogin['senha'])){
                    $sqlUsuario = "SELECT idUsuario,nomeUsuario,admin FROM usuario WHERE email= '$email'";
                    if($resultUsuario = mysqli_query($connect,$sqlUsuario)){
                        mysqli_close($connect);
                        if(mysqli_num_rows($resultEmail) > 0){
                            $dadosUsuarios = mysqli_fetch_array($resultUsuario);
                            $_SESSION['loginON']= true;
                            $_SESSION['id_usuario']= $dadosUsuarios['idUsuario'];
                            $_SESSION['nome_usuario'] = $dadosUsuarios['nomeUsuario'];
                            $_SESSION['adminON']= $dadosUsuarios['admin'];
                            //Redireciona para o INDEX
                            header('Location: index.php');
                        }
                    }
                }else{
                    $_SESSION['erros'] = $erros[] = "Senha Incorreta";
                    header('Location: pageUsuarioLogin.php');
                }
            }else{
                $_SESSION['erros'] = $erros[] = "Nenhuma conta encontrada";
                header('Location: pageUsuarioLogin.php');
            }
        }
    }
}	
?>