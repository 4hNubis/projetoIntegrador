<?php

include 'funcIniciaSessao.php';
include_once 'funcConnecDekasBD.php';


if(isset($_POST['btnUpdateProdu'])){

    $id = filter_var(mysqli_escape_string($connect, $_POST['idProduUpdate']),FILTER_SANITIZE_NUMBER_INT);

	$nomeProdu = mysqli_escape_string($connect, $_POST['nome']);
    $valProdu = mysqli_escape_string($connect, $_POST['valor']);
    $pesoProdu = mysqli_escape_string($connect, $_POST['peso']);
    $dscProdu = mysqli_escape_string($connect, $_POST['dsc']);
    
    $sql="UPDATE produto SET nomeProdu='$nomeProdu',valProdu='$valProdu', pesoProdu='$pesoProdu', dscProdu='$dscProdu' WHERE idProdu=$id";
    

	if(mysqli_query($connect,$sql)){
		header('Location: pageEditaProduto.php');
    }
}else{
    header('Location: pageEditaProduto.php');
}
?>
