<!-- Mensagem de erro nos campos de Login e Registro -->
<?php
if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
endif;
?>

