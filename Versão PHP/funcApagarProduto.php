<?php

include_once 'ativaBD.php';

if(isset($_POST['btnApagarUsuario'])){
    $id = filter_var(mysqli_escape_string($connect, $_POST['idProduApagar']),FILTER_SANITIZE_NUMBER_INT);
    $sql = "DELETE FROM produto WHERE idProdu ='$id' ";
    if(mysqli_query($connect,$sql)){
        header('Location: pageEditaProduto.php');
    }    
}

?>