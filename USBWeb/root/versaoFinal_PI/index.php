<?php 
    include_once 'header.php';

    if(isset($_SESSION['adminON'])){
        ?>
        <!-- Conteiner ADMIN -->
        <div class="container">
            <!-- Vitrine de produtos -->
            <div id="vitrine" >
                <div class="header-vitrine">
                    <h3>Editar Produtos</h3>
                    <div class="input-field">
                        <a href="pageProdutoCria.php" class="btn">Cria Produto</a>
                    </div>
                    <div>
                        <nav class="pink lighten-2 border-rodanda">
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

                                        <!-- Opções Produto -->
                                        <div class="list-produto-item-footer">
                                            <form action="pageProdutoEdita.php" method="post">
                                                <input type="hidden" name="idProduEdita" value="<?php echo $dados['idProdu'];?>">
                                                <button type="submit" class="btn-floating orange" id="btnProduEdita"><i class="material-icons">edit</i></button>
                                            </form>
                                            <a href="#modal<?php echo $dados['idProdu'];?>" class="btn-floating red modal-trigger" ><i class="material-icons">delete</i></a>
                                        </div>

                                    
                                    <!-- ------------ Modal ------------------ -->
                                    <div id="modal<?php echo $dados['idProdu'];?>" class="modal">
                                        <div class="modal-content center">
                                            <h3>Apagar Produto</h3>
                                            <p>Você tem certeza que deseja deletar permanentemente o produto <?php echo $dados['nomeProdu']?> do Bando de Dados? Se sim, clique em DELETAR</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="ativaProdutoApagar.php" class="center" method="post">
                                                <input type="hidden" name="idProduApagar" value="<?php echo $dados['idProdu']?>">
                                                <button name="btnApagarProduto" type="submit" class="btn red">DELETAR</button>
                                            </form>
                                            <a href="#!" class="modal-close waves-effect waves-green btn-flat right">Cancelar</a>
                                        </div>
                                    </div>
                                    <!-- ------------ Modal ------------------ -->

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

        <?php
    }else{
        ?>
        <!-- Conteiner Usuario -->
        <div class="container">
            <!-- Vitrine de produtos -->
            <div id="vitrine" >
                <div class="header-vitrine">
                    <h3>Protudos</h3>
                    <div>
                        <nav class="pink lighten-2">
                            <div class="nav-wrapper border-rodanda">
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
        <?php
    }
?>



<?php include_once 'footer.php';?>