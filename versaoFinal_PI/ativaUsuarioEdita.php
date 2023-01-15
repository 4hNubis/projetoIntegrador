<?php

include_once 'ativaBD.php';
include_once 'ativaSessao.php';

if(isset($_POST['btnUsuarioEditado'])):
    // Array de erros
    // Se erros não iniciado, inicia ele
    if (!isset($_SESSION['erros'])) {
        $_SESSION['erros'] = $erros = array();    
    }
    
    $id = $_POST['idUsuarioEditado'];

	//mysqli_escape_string - função que limpa os dados e evita sqlinjection e outros caracteres indevidos.
	$email = mysqli_escape_string($connect, $_POST['email']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $CPF = mysqli_escape_string($connect, $_POST['valCPF']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $CEP = mysqli_escape_string($connect, $_POST['cep']);
	$numero = mysqli_escape_string($connect, $_POST['numero']);
    $dscComple = mysqli_escape_string($connect, $_POST['dscComple']);
	

    if(strlen($senha) < 59){
        $senha = password_hash($senha, PASSWORD_BCRYPT);
    }
    
    $sql="UPDATE usuario SET CPF='$CPF',email='$email',senha='$senha',nomeUsuario='$nome',telefoneUsuario='$telefone',CEP='$CEP',numeroEnder='$numero',dscComple='$dscComple' WHERE idUsuario=$id";
    if(mysqli_query($connect,$sql)):
		header('Location: pageUsuarioLista.php');
    endif;


endif;	
?>