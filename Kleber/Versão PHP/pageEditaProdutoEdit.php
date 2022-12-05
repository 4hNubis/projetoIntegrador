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
        include 'funcConnecDekasBD.php';

        if(isset($_GET['id'])):
            $id = mysqli_escape_string($connect, $_GET['id']);
            
            $sql="SELECT * FROM produto WHERE idProdu= '$id'";
            $resultado = mysqli_query($connect, $sql);
            if(!empty($resultado)){
            }
            $dados = mysqli_fetch_array($resultado);
            
        endif;
         
        ?>
        <div class="container">
            <div class="card-panel">	
                <div class="row">
                    <h3>Editar Produto</h3>
                    <form  action="funcUpdateProduto.php" method="POST">
                        <div class="row">
                        </div>
                        <div class="">
                            <img src="<?php echo $dados['srcIMG']?>">
                            <!-- <form action="#">
                                <div class="file-field input-field" style="display: flex; align-items: center; justify-content: center;">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper div" style="width: 33%;">
                                        <input  class="file-path validate" type="text" value="<?php echo $dados['srcIMG']?>">
                                    </div>
                                </div>
                            </form> -->
                        </div>
                        <div class="msgErro col s12 "><?php include 'funcErros.php'?></div>
                        <div class="col s12">
                            <div class="input-field col s12 l5 push-l1 ">
                                <input name="nome" value="<?php echo $dados['nomeProdu'] ?>" type="text" data-length="10">
                                <label for="nome" >Nome <span>0</span></label>
                            </div>
                            <div class="input-field col s12 l5 push-l1 ">
                                <input name="valor" type="text" value="<?php echo $dados['valProdu'] ?>">
                                <label for="valor">Valor</label>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class=" input-field col s12 l5 push-l1 ">
                                <input name="peso"  type="text" value="<?php echo $dados['pesoProdu'] ?>">
                                <label for="peso">Peso</label>
                            </div>
                            <div class=" input-field col s12 l5 push-l1 ">
                                <input name="dsc" type="text" value="<?php echo $dados['dscProdu'] ?>">
                                <label for="dsc">Descrição</label>
                            </div>
                            

                        </div>
                        <div class="col s12">
                            <div class="col s6">
                                <input type="hidden" name="idProduUpdate" value="<?php echo $dados['idProdu']?>">
                                <button name="btnUpdateProdu" type="submit" class="btn waves-effect waves-light col s8 push-s2">Confirmar Edição</button>
                            </div>
                            <div class=" col s6  ">
                                <a href="pageEditaProduto.php" class="btn red">CANCELAR</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>   
    </body>
    <script>
        const input = document.querySelector('input');
        const counter = document.querySelector('span');
        const char = document.querySelector('label')

        counter.style.color='red',

        input.addEventListener('input', e=>{
            if (input.value.length < 20){
                counter.innerText = input.value.length;
            }else{
                counter.innerText = 'max';
                input.value = input.value.substring(0, 20)
            }
        })
       

    </script>
</html>
