<!DOCTYPE html>
<html lang="pt-BR">
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
        include_once 'header.php';
        ?>
       
<!-- O conteiner -->
<div class="container">
    <!-- Vitrine de produtos -->
    <div id="vitrine" >
        <div class="header-vitrine">
            <h3>Protudos</h3>
            <div>
                <nav class="pink lighten-2">
                    <div class="nav-wrapper">
                        <form>
                            <div class="input-field">
                                <input id="search" search="produto" type="search" required placeholder="Pesquisar ...">
                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                <i onclick="limpaInp()" class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <div class="content-vitrine">
            <ul id="produto" class="list-produto">
                <?php
                // Inicia o BD
                include_once 'funcConnecDekasBD.php';
                // Realiza a busca de todos os produtos ativos
                $sql="SELECT * FROM produto WHERE estado=true";
                $resultado= mysqli_query($connect,$sql);
                if($resultado){
                    mysqli_close($connect);
                    if (mysqli_num_rows($resultado)>0){
                        while($dados =mysqli_fetch_array($resultado)){
                ?>
                <!-- Esqueleto de produto  -->
                <li nome="<?php echo $dados['nomeProdu']?>" class="list-produto-item card #eeeeee grey lighten-3">
                    <div ><img id="img" src=<?php echo $dados['srcIMG'] ?> alt="brigadeiro"></div>
                    <div class="list-produto-item-div"><h5><?php echo $dados['nomeProdu'] ?></h5></div>
                    <div class="list-produto-item-div">R$<?php echo $dados['valProdu']?> POR KG</div>

                    <!-- Descrição Produto -->
                    <div class="list-produto-item-div"><span class="activator btn pink lighten-2">Mais Detalhes</span></div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Descrição do Produto<i class="material-icons right">close</i></span>
                        <p><?php echo $dados['dscProdu']?></p>
                    </div>
                </li>       
                <?php 
                        }
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<script>
        for(i of document.querySelectorAll('[search]')){
        try{
            busca(i,document.querySelector("#"+i.getAttribute('search')))
        }catch(e){}
    }

    function busca(input_field,div){
        input_field.onkeyup=function(e){
            for(di of div.children){
                r  = new RegExp(this.value,"g")
                if(di.getAttribute("nome").toLowerCase().match(r) != null)
                    di.style.removeProperty('display')
                else
                    di.style.display = "none"
            }
        }
    }
</script>
    </body>
</html>