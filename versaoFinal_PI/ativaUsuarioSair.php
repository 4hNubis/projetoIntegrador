<!-- Limpa e destroi a sessão ao click no SAIR -->
<?php
include 'ativaSessao.php';
    if(isset($_SESSION)){
        session_unset();
        session_destroy();
        header('Location: index.php');
    }
?>