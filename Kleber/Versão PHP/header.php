<!-- Include`s -->
<?php
    include_once 'funcoesPHP/connecDekasBD.php';
    include 'funcoesPHP/iniciaSessao.php';
?>

<header class="row">
    <nav class="navBar col s12">
        <a href="index.php">Deka´s Confeitaria</a>
        <div class="divPesquisa">
            <input id="pesquisa" type="text" placeholder="Pesquisar ...">
            <i class="material-icons">search</i>
        </div>
        <ul class="navMenu">
            <li class="nav-iten"><a href="index.php">Home</a></li>
            <li class="nav-iten"><a href="pageContato.php">Contato</a></li> 
            <li class="nav-iten"><a href="pageLogin.php">Login</a></li>   
        </ul>
    </nav>
</header>