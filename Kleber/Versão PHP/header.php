<!-- Include`s -->
<?php
    include 'funcIniciaSessao.php';
?>

<header>
    <nav class="navBar row">
        <div class="col s6">
            <a href="index.php">Deka´s Confeitaria</a>
        </div>
        <div class="col s6">
            <ul id="navMenu" class="navMenu">
                <li class="nav-item"><a href="index.php">Inicio</a></li>
                <li class="nav-item"><a href="pageContato.php">Contato</a></li> 
                <li id="subMenu" class="nav-item"><a href="pageLogin.php">Login</a></li>   
            </ul>
        </div>
    </nav>
</header>


<!-- Funções pertencentes ao HEADER -->
<?php 
    // Se o usuario estiver logado, ele realiza a alteração no header, mostrando o usuario e fazendo o acrescimo do SAIR
    // Chega se a $_SESSION['logado'] existe
    if(isset($_SESSION['logado'])){ 
        if(!$_SESSION['admin']){
?>
        <!-- Faz a alteração no header -->
        <script>
            // Cria e faz a adição dos itens no navSubMenu
            document.getElementById('subMenu').innerHTML = '<?php echo $_SESSION['nome_usuario'] ?><ul id="navSubMenu" class="navSubMenu"></ul>' ;
            let htmlPerfil = '<li class="nav-item-subMenu"><a href="pagePerfil.php">Meu Perfil</a></li>';
            document.getElementById('navSubMenu').insertAdjacentHTML('beforeend',htmlPerfil);
            // Cria e faz a adição no navMenu
            let htmlCarrinho = '<li class="nav-item"><a href="pageCarrinho.php"><i class="material-icons">add_shopping_cart</i></a></li>';
            let htmlSair ='<li class="nav-item"><a href="funcLimpaLogin.php?sair=true">Sair</a></li>' ;
            document.getElementById('subMenu').insertAdjacentHTML('beforebegin',htmlCarrinho);
            document.getElementById('subMenu').insertAdjacentHTML('beforebegin',htmlFavotiro);
            document.getElementById('navMenu').insertAdjacentHTML('beforeend',htmlSair);
        </script>
<?php   }else{ ?>
        <script>
            // Cria e faz a adição dos itens no navSubMenu
            document.getElementById('navMenu').innerHTML = '<li class="nav-item"><?php echo $_SESSION['nome_usuario'] ?><ul id="navSubMenu" class="navSubMenu"></ul></li>' ;
            let htmlAreaEditaProduto = '<li class="nav-item"><a href="pageEditaProduto.php">Editar Produtos</a></li>';
            let htmlListaUsuario = '<li class="nav-item"><a href="pageListaUsuario.php">Lista Usuarios</a></li>';
            document.getElementById('navSubMenu').insertAdjacentHTML('beforeend',htmlAreaEditaProduto);
            document.getElementById('navSubMenu').insertAdjacentHTML('beforeend',htmlListaUsuario);
            // Cria e faz a adição dos itens no navMenu
            let htmlPedidos = '<li class="nav-item"><a href="">Pedidos</a></li>'
            let htmlSair ='<li class="nav-item"><a href="funcLimpaLogin.php?sair=true">Sair</a></li>' ;
            document.getElementById('navMenu').insertAdjacentHTML('beforeend',htmlPedidos);
            document.getElementById('navMenu').insertAdjacentHTML('beforeend',htmlSair);
        </script>
<?php  } } ?>