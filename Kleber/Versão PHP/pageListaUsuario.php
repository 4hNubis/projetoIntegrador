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
        ?>



        <div  class="container row">
            <div class="card-panel col s12">
                <h3>Lista de Usuarios</h3>
                <div>
                    <div class="divCentro">
                        <div class="divPesquisaLista">
                            <input id="pesquisaLista" type="text" placeholder="Pesquisar usuario...">
                            <i class="material-icons">search</i>
                        </div>
                    </div>
                </div>
                <table id="tabelaUsuarios" class="tabelaUsuarios centered striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>CPF</th>
                            <th>EMAIL</th>
                            <th>Editar Usuario</th>
                            <th>Apagar Usuario</th>
                        </tr>
                    </thead>
                    <?php include 'funcListaUsuarios.php'; ?>
                </table>
            </div>
        </div>

        <!-- Faz a busca do usuario na Tabela -->
        <script>

        const INPUT_BUSCA = document.getElementById('pesquisaLista');
        const TABELA_BEBIDAS = document.getElementById('tabelaUsuarios');

        INPUT_BUSCA.addEventListener('keyup', () => {
            let expressao = INPUT_BUSCA.value.toLowerCase();

            if (expressao.length === 1) {
                return;
            }

            let linhas = TABELA_BEBIDAS.getElementsByTagName('tr');

            for (let posicao in linhas) {
                if (true === isNaN(posicao)) {
                    continue;
                }

                let conteudoDaLinha = linhas[posicao].innerHTML.toLowerCase();

                if (true === conteudoDaLinha.includes(expressao)) {
                    linhas[posicao].style.display = '';
                }else {
                    linhas[posicao].style.display = 'none';
                }
            }
        });
        </script>
    </body>
</html>