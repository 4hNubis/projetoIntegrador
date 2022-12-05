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
       

        <!-- Conteiner sera basicamente aonde sera montado todo o conteudo das paginas -->
        <div class="container">
            <!-- O Expositor De Produtos, como o nome sugere, será onde os produtos serão adicionados. -->
            <!-- Podendo futuramente ter a função de adicionar e remover produtos atraves do JavaScript. -->
            <!-- Sendo asim tornando o site mais dinamico e pratico para o cliente. -->
            <div id="expositor" class="row ">
                <h2>Produtos</h2>
                <!-- Aqui sera feita a construção dos produtos -->
                <!-- Abrindo uma busca no SQL para achar os produtos -->
              
                    <!-- <table id="listaProdutos"> -->
                        <div class="divCentro">
                            <div class="divPesquisaLista">
                                <!-- <input id="pesquisaLista" type="text" placeholder="Pesquisar usuario..."> -->
                                <input search="produto">
                                <i class="material-icons">search</i>
                            </div>
                        </div>
                            <ul id="produto">
                            <?php include_once 'funcConstrutorProduto.php'; ?>
                            </ul>
                        </div>
                    <!-- </table> -->
                
                
            </div>
        </div>
        <!-- Faz a busca do usuario na Tabela -->
<script>

// const INPUT_BUSCA = document.getElementById('pesquisaLista');
// const TABELA_BEBIDAS = document.getElementById('listaProdutos');

// INPUT_BUSCA.addEventListener('keyup', () => {
//     let expressao = INPUT_BUSCA.value.toLowerCase();

//     if (expressao.length === 1) {
//         return;
//     }

//     let linhas = TABELA_BEBIDAS.getElementsByTagName('ul');

//     for (let posicao in linhas) {
//         if (true === isNaN(posicao)) {
//             continue;
//         }

//         let conteudoDaLinha = linhas[posicao].innerHTML.toLowerCase();

//         if (true === conteudoDaLinha.includes(expressao)) {
//             linhas[posicao].style.display = '';
//         }else {
//             linhas[posicao].style.display = 'none';
//         }
//     }
// });

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