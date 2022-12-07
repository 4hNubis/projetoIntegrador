<?php 
    include_once 'header.php';
    $_SESSION['erro'] = $erro[]= '';
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
                include_once 'ativaBD.php';
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

<?php include_once 'footer.php';?>
