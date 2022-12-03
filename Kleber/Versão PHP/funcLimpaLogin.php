<!-- Limpa e destroi a sessão ao click no SAIR -->
<?php
include 'funcIniciaSessao.php';
if(isset($_GET['sair'])){
    if(isset($_SESSION)){
        session_unset();
        session_destroy();
        header('Location: index.php');
    }
}
?>
