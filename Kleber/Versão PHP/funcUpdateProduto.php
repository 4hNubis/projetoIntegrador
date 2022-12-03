<?php

include 'funcIniciaSessao.php';
include_once 'funcConnecDekasBD.php';


if(isset($_POST['btnUpdateProdu'])){

    $id = filter_var(mysqli_escape_string($connect, $_POST['idProduUpdate']),FILTER_SANITIZE_NUMBER_INT);

	$srcIMG = mysqli_escape_string($connect, $_POST['srcIMG']);
	$nomeProdu = mysqli_escape_string($connect, $_POST['nomeProdu']);
    $valProdu = mysqli_escape_string($connect, $_POST['valProdu']);
    $pesoProdu = mysqli_escape_string($connect, $_POST['pesoProdu']);
    $dscProdu = mysqli_escape_string($connect, $_POST['dscProdu']);
    
    
    $sql="UPDATE produto SET srcIMG='$srcIMG',nomeProdu='$nomeProdu',valProdu='$valProdu', pesoProdu='$pesoProdu', dscProdu='$dscProdu' WHERE idUProdu=$id";
    

	// if(mysqli_query($connect,$sql)):
	// 	header('Location: pageEditaProduto.php');
    // endif;
}else{
    header('Location: pageEditaProduto.php');
}
?>
