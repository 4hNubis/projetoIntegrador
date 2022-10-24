<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deka´s Confeitaria</title>
        
        <!-- Reseta os padrões dos navegadores -->
        <link rel="stylesheet" href="stylePagina/reset.css">
        <!-- Style da pagina -->
        <link rel="stylesheet" href="stylePagina/stylePages.css">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!-- iconis  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
    </head>
    <body>
        
        <?php
        include 'funcoesPHP/iniciaSessao.php'; 
        include_once 'header.php'; ?>
        <script>console.log('<?php echo session_id() ;?>')</script>

        <!-- Conteiner sera basicamente aonde sera montado todo o conteudo das paginas -->
        <div class="container">
            <h1>Produtos</h1>
            <!-- O Expositor De Produtos, como o nome sugere, será onde os produtos serão adicionados. -->
            <!-- Podendo futuramente ter a função de adicionar e remover produtos atraves do JavaScript. -->
            <!-- Sendo asim tornando o site mais dinamico e pratico para o cliente. -->
            <div id="expositor" class="row">
                <!-- Aqui sera feita a construção dos produtos -->
                <!-- Abrindo uma busca no SQL para achar os produtos -->
                <?php include_once 'funcoesPHP/construtorProduto.php'; ?>
                    
            </div>
        </div>

    </body>
</html>