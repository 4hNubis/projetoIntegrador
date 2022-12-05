<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuarios</title>
        
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
        include_once 'header.php';
        include_once 'funcCriaProduto.php'; 
        
        ?>

        <div class="container">
            <div class="card-panel row">
                <h3>Criando Produto</h3>

                <br><br><br>

                <div class="msgErro col s12 "><?php include 'funcErros.php'?></div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                    <div class="col s12">
                        <a href="#inp" class="btn gree" id="btn">File</a>
                        <input type="file" accept="imgProduto/*" id="inp" name="srcIMG">
                        <img name="img" src="" id="img" class="center-align">
                    </div>
                    <div class="col s12">
                        <div class="input-field col s12 l5 push-l1 ">
                            <input name="nome" type="text" data-length="10">
                            <label for="nome" >Nome do Produto</label>
                        </div>
                        <div class="input-field col s12 l5 push-l1 ">
                            <input name="valor" type="text" >
                            <label for="valor">Valor do Produto</label>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class=" input-field col s12 l5 push-l1 ">
                            <input name="peso"  type="text" >
                            <label for="peso">Peso do Produto</label>
                        </div>
                        <div class=" input-field col s12 l5 push-l1 ">
                            <input name="dsc" type="text">
                            <label for="dsc">Descrição do Produto</label>
                        </div>
                        

                    </div>
                    <div class="col s12">
                        <div class="col s6">
                            <button name="btnCriaProdu" type="submit" class="btn waves-effect waves-light col s8 push-s2">Criar Produto</button>
                        </div>
                        <div class=" col s6  ">
                            <a href="pageEditaProduto.php" class="btn red">CANCELAR</a>
                        </div>
                    </div>
                </form>
                   
                </div>
            </div>
        </div>

<!-- Vizualiza a img antes de fazer o UPLOAD no servidor -->
<script>
    let photo = document.getElementById('img');
    let file = document.getElementById('inp');
    let btn = document.getElementById('btn');

    btn.addEventListener('click', () => {
        file.click();
    });

    file.addEventListener('change', () => {

        if (file.files.length <= 0) {
            return;
        }

        let reader = new FileReader();

        reader.onload = () => {
            photo.src = reader.result;
        }

        reader.readAsDataURL(file.files[0]);
    });


</script>
    </body>
</html>

