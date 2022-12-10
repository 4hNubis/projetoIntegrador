<!-- Mensagem de erro nas page de Login e Registro -->
<?php
if(!empty($_SESSION['erros'])){
    $erros = array();
    $erros[] = $_SESSION['erros'];
    foreach($erros as $erro){
        echo $erro;
        $_SESSION['erros'] = ''; 
    }
}else{
}
?>