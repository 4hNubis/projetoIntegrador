<?php

include_once 'funcConnecDekasBD.php';

if(isset($_POST['btnApagarUsuario'])){
    $id = filter_var(mysqli_escape_string($connect, $_POST['idUsuarioApagar']),FILTER_SANITIZE_NUMBER_INT);
    $sql = "DELETE FROM usuario WHERE idUsuario ='$id' ";
    if(mysqli_query($connect,$sql)){
        header('Location: pageListaUsuario.php');
    }    
}

?>