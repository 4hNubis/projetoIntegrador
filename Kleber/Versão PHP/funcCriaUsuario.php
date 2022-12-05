
<?php

//Inicia a conexão com o BD Dekas
require_once 'funcConnecDekasBD.php';


//se existir o indice btn_entrar , é porque alguem clicou no botão
if (isset($_POST['btRegistro'])):
	
	$erros = array();
	//mysqli_escape_string - função que limpa os dados e evita sqlinjection e outros caracteres indevidos.
	$email = mysqli_escape_string($connect, $_POST['emailRegister']);
	$senha = mysqli_escape_string($connect, $_POST['senhaRegister']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $CPF = mysqli_escape_string($connect, $_POST['CPF']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $CEP = mysqli_escape_string($connect, $_POST['CEP']);
	$numero = mysqli_escape_string($connect, $_POST['numero']);
    $dscComple = mysqli_escape_string($connect, $_POST['refeEnder']);
    
    if(empty($email) || empty($senha) || empty($nome) || empty($CPF) || empty($telefone) || empty($CEP) || empty($numero)):

        $erros[] = "<p> Todos os campos devem estar preencidos </p>";
        echo '<script>console.log("Era pra mostrar o erro")</script>';

    else:
        //criptografando a senha no mode BCrypt para salvar o hash criado no BD
        $senha = sha1($senha);
        // O insert com os dados que serão salvos no BD
        $sql = "INSERT INTO usuario(CPF, email, senha, nomeUsuario, telefoneUsuario, CEP, numeroEnder, dscComple, admin) VALUES ('$CPF', '$email', '$senha', '$nome', '$telefone', '$CEP', '$numero', '$dscComple', NULL)";
        // Executa o sql
        // Confirma se foi criado o novo Usuario
        if(mysqli_query($connect,$sql)):
            $_SESSION['aviso']= 'Usuario Criado com sucesso';
            header('Location: index.php?aviso');
        endif;

    endif;
    
endif;
?>
<script>
    $senha = await b 
</script>