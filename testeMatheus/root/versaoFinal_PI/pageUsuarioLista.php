<?include_once 'header.php';?>


<div  class="container row">
            <div class="card-panel col s12">
                <div class="header-vitrine input-field">
                    <h3>Lista de Usuarios</h3>
                    <div>
                        <nav class="pink lighten-2 border-rodanda">
                            <div class="nav-wrapper">
                                <form>
                                    <div class="input-field">
                                        <input id="pesquisaTabela"  type="search" required placeholder="Pesquisar ...">
                                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                </form>
                            </div>
                        </nav>
                    </div>
                </div>
                <table id="tabelaUsuarios" class="centered striped input-field col s12">
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

                    <?
                        include_once 'ativaBD.php';
                        $sql="SELECT * FROM usuario";
                        $resultado= mysqli_query($connect,$sql);
                        mysqli_close($connect);
                        if (mysqli_num_rows($resultado)>0):
                            while($dados =mysqli_fetch_array($resultado)):	
                    ?>
                                <div>
                                    <tr id="listaUsuarios">
                                        <td><?php echo $dados['idUsuario']?></td>
                                        <td><?php echo $dados['nomeUsuario']?></td>
                                        <td><?php echo $dados['CPF']?></td>
                                        <td><?php echo $dados['email']?></td>

                                        <td>
                                            <form action="pageUsuarioEdita.php" method="post">
                                                <input type="hidden" name="idUsuarioEdita" value="<?php echo $dados['idUsuario'];?>">
                                                <button type="submit" name="btnUsuarioEdita" class="btn-floating orange"><i class="material-icons">edit</i></button>
                                            </form>
                                        </td>
                                        <td><a href="#modal<?php echo $dados['idUsuario'];?>" class="btn-floating red modal-trigger" ><i class="material-icons">delete</i></a> </td>

                                        <!-- Modal Deletar Usuario -->
                                            <!-- Modal para apagar um Usuario -->
                                            <div id="modal<?php echo $dados['idUsuario'];?>" class="modal">
                                                <div class="modal-content center">
                                                    <h3>Apagar Usuario</h3>
                                                    <p>Você tem certeza que deseja deletar permanentemente o usuario <?php echo $dados['nomeUsuario']?> do Bando de Dados? Se sim, clique em DELETAR</p>
                                                </div>
                                                <div class="modal-footer center">
                                                    <form action="ativaUsuarioApaga.php" class="center" method="post">
                                                        <input type="hidden" name="idUsuarioApaga" value="<?php echo $dados['idUsuario']?>">
                                                        <button name="btnUsuarioApaga" type="submit" class="btn red">DELETAR</button>
                                                    </form>
                                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                                </div>
                                            </div>

                                    </tr>
                                </div>
                            <?php 
                            endwhile; 
                        else: ?>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        <?php
                        endif;
                        ?>
                </table>
            </div>
        </div>
<? include_once 'footer.php';?>