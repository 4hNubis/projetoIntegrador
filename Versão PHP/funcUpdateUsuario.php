<?php

include 'funcIniciaSessao.php';
include_once 'funcConnecDekasBD.php';


if(isset($_POST['btnUpdateUsuario'])):
    
    echo '<script>console.log("Pohaaa")</script>';

    $id = filter_var(mysqli_escape_string($connect, $_POST['idUsuarioUpdate']),FILTER_SANITIZE_NUMBER_INT);

	$email = mysqli_escape_string($connect, $_POST['email']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $CPF = mysqli_escape_string($connect, $_POST['CPF']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $CEP = mysqli_escape_string($connect, $_POST['CEP']);
	$numero = mysqli_escape_string($connect, $_POST['numero']);
    $dscComple = mysqli_escape_string($connect, $_POST['refeEnder']);
	

    
    $sql="UPDATE usuario SET CPF='$CPF',email='$email',senha='$senha',nomeUsuario='$nome',telefoneUsuario='$telefone',CEP='$CEP',numeroEnder='$numero',dscComple='$dscComple' WHERE idUsuario=$id";
        

	if(mysqli_query($connect,$sql)):
		header('Location: pageListaUsuario.php');
    endif;
endif;	

?>
