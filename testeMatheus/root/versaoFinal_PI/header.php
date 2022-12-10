<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import MATERIALIZE -->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!-- Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- ----------------------------- -->
        <!-- CSS -->
            <link rel="stylesheet" href="Style/style.css">
        <!-- ------------------------------------ -->

    <title>Deka`s Comfeitaria</title>
</head>
<body class="fundoRosa">
    <!-- Inicia Sessão -->
    <?php include 'ativaSessao.php';?>

    <nav class="pink lighten-2" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">Deka`s Confeitaria</a>
            <!-- Menu -->
            <ul id="menu" class="right hide-on-med-and-down">
                <!-- Itens Menu -->
                <li><a href="">Contato</a></li>
                <li><a href="pageUsuarioLogin.php">Login</a></li>
            </ul>
            <!-- Menu Mobile -->
            <ul id="nav-mobile" class="sidenav fundoRosa">
                <!-- Itens Menu Mobile -->
                <li><a href="pageUsuarioLogin.php" class="btn">Login</a></li>
                <li><a href="" class="btn">Contato</a></li>
            </ul>
            <a href="" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <!-- Altera o header e SIDENAV se login feito -->
    <?php

    if(isset($_SESSION['loginON'])){
        if($_SESSION['adminON']){
            ?>
            <script>
                // Seleciono os menus que serão alterados
                let menu = document.getElementById('menu');
                let menuMobile = document.getElementById('nav-mobile');
                
                // Removendo o elemento filho
                menu.removeChild(menu.lastElementChild);
                menuMobile.removeChild(menuMobile.firstElementChild);

                // Criando variaveis que serão adicionadas aos MENU
                let htmlMenuUsuario = "<li><a href='#' class='dropdown-trigger' data-target='dropdown1'><?php echo $_SESSION['nome_usuario']?></a></li>";
                // Criando variaveis que serão adicionadas ao DROPDOWN
                let htmlDropdown1 = "<ul id='dropdown1' class='dropdown-content'></ul>";
                let htmlDropPerfil = "<li><a href='pageUsuarioLista.php'>Lista Usuarios</a></li>";
                let htmlDropSair = "<li><a href='ativaUsuarioSair.php'>Sair</a></li>";
                
                // Criando elementos que serão adiciondos ao SIDENAV
                let htmlMobileUsuario = "<li><a class='btn'><?php echo $_SESSION['nome_usuario']?></a></li>"
                let htmlMobilePerfil = "<li><a href='pageUsuarioLista.php' class='btn'>Lista Usuarios</a></li>"
                let htmlMobileSair = "<li><a href='ativaUsuarioSair.php' class='btn'>Sair</a></li>"
                
                // Adiocionando elementos ao MENU
                menu.insertAdjacentHTML("beforeend",htmlMenuUsuario);

                // Adicionando elementos ao SIDENAV
                menuMobile.insertAdjacentHTML("beforeend",htmlMobileSair);
                menuMobile.insertAdjacentHTML("afterbegin",htmlMobilePerfil);
                menuMobile.insertAdjacentHTML("afterbegin",htmlMobileUsuario);
             
                // Adicionando o Dropdown
                menu.insertAdjacentHTML("afterend",htmlDropdown1);
                // Pegando o elemento Dropdown criando acima e adicionando novos elementos nele
                menuDrop = document.getElementById('dropdown1')
                menuDrop.insertAdjacentHTML("beforeend",htmlDropPerfil);
                menuDrop.insertAdjacentHTML("beforeend",htmlDropSair);
            </script>
            <?php
        }else{
            ?>
            <script>
                // Seleciono os menus que serão alterados
                let menu = document.getElementById('menu');
                let menuMobile = document.getElementById('nav-mobile');
                
                // Removendo o elemento filho
                menu.removeChild(menu.lastElementChild);
                menuMobile.removeChild(menuMobile.firstElementChild);

                // Criando variaveis que serão adicionadas aos MENU
                let htmlMenuUsuario = "<li><a href='#' class='dropdown-trigger' data-target='dropdown1'><?php echo $_SESSION['nome_usuario']?></a></li>";
                let htmlCarrinho = "<li><a href=''>Carrinho</li>";
                // Criando variaveis que serão adicionadas ao DROPDOWN
                let htmlDropdown1 = "<ul id='dropdown1' class='dropdown-content'></ul>";
                let htmlDropPerfil = "<li><a href='pageUsuarioPerfil.php'>Perfil</a></li>";
                let htmlDropSair = "<li><a href='ativaUsuarioSair.php'>Sair</a></li>";
                
                // Criando elementos que serão adiciondos ao SIDENAV
                let htmlMobileUsuario = "<li><a class='btn'><?php echo $_SESSION['nome_usuario']?></a></li>"
                let htmlMobilePerfil = "<li><a href='pageUsuarioPerfil.php' class='btn'>Perfil</a></li>"
                let htmlMobileSair = "<li><a href='ativaUsuarioSair.php' class='btn'>Sair</a></li>"
                let htmlMobileCarrinho = "<li><a href='' class='btn'>Carrinho</li>";

                
                
                // Adiocionando elementos ao MENU
                menu.insertAdjacentHTML("beforeend", htmlCarrinho);
                menu.insertAdjacentHTML("beforeend",htmlMenuUsuario);

                // Adicionando elementos ao SIDENAV
                menuMobile.insertAdjacentHTML("beforeend",htmlMobileSair);
                menuMobile.insertAdjacentHTML("afterbegin", htmlMobileCarrinho);
                menuMobile.insertAdjacentHTML("afterbegin",htmlMobilePerfil);
                menuMobile.insertAdjacentHTML("afterbegin",htmlMobileUsuario);
             
                // Adicionando o Dropdown
                menu.insertAdjacentHTML("afterend",htmlDropdown1);
                // Pegando o elemento Dropdown criando acima e adicionando novos elementos nele
                menuDrop = document.getElementById('dropdown1')
                menuDrop.insertAdjacentHTML("beforeend",htmlDropPerfil);
                menuDrop.insertAdjacentHTML("beforeend",htmlDropSair);
            </script>
            <?php
        }
    }
    ?>

