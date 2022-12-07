<?php
//Inicia a conexão com o BD Dekas
require_once 'ativaBD.php';
include 'ativaSessao.php';
include 'ativaErro.php';

//se existir o indice btn_entrar , é porque alguem clicou no botão
if (isset($_POST['btnRegistro'])){
    if (!isset($_SESSION['erros'])) {
        $_SESSION['erros'] = $erros = array();    
    }

    //se existir o indice btn_entrar , é porque alguem clicou no botão

	
	$erros = array();
	//mysqli_escape_string - função que limpa os dados e evita sqlinjection e outros caracteres indevidos.
	$email = mysqli_escape_string($connect, $_POST['email']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $CPF = mysqli_escape_string($connect, $_POST['CPF']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $CEP = mysqli_escape_string($connect, $_POST['cep']);
	$numero = mysqli_escape_string($connect, $_POST['numero']);
    $dscComple = mysqli_escape_string($connect, $_POST['dscComple']);
    
    if(empty($email) || empty($senha) || empty($nome) || empty($CPF) || empty($telefone) || empty($CEP) || empty($numero)){

        $_SESSION['erros'] = $erros[] = "<p> Todos os campos devem estar preencidos </p>";
        header('Location: pageRegister.php');

    }else{
        //criptografando a senha no mode BCrypt para salvar o hash criado no BD
        $senha = password_hash($senha, PASSWORD_BCRYPT);
        // O insert com os dados que serão salvos no BD
        $sql = "INSERT INTO usuario(CPF, email, senha, nomeUsuario, telefoneUsuario, CEP, numeroEnder, dscComple, admin) VALUES ('$CPF', '$email', '$senha', '$nome', '$telefone', '$CEP', '$numero', '$dscComple', NULL)";
        // Executa o sql
        // Confirma se foi criado o novo Usuario
        if(mysqli_query($connect,$sql)){
            $_SESSION['aviso']= 'Usuario Criado com sucesso';
            header('Location: index.php');
        }else{
            $_SESSION['erros'] = $erros[] = "Não foi possivel criar usuario";
            header('Location: pageRegister.php');
        }

    }
    
}
?>
