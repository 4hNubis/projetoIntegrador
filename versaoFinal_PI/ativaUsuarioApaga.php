<?php
include_once 'ativaBD.php';

if(isset($_POST['btnUsuarioApaga'])){
    $id = filter_var(mysqli_escape_string($connect, $_POST['idUsuarioApaga']),FILTER_SANITIZE_NUMBER_INT);
    $sql = "DELETE FROM usuario WHERE idUsuario ='$id' ";
    if(mysqli_query($connect,$sql)){
        header('Location: pageUsuarioLista.php');
    }    
}
?>