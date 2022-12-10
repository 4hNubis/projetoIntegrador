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
            
            $sql="SELECT * FROM usuario WHERE idUsuario= '$id'";
            $resultado = mysqli_query($connect, $sql);
            if(!empty($resultado)){
            }
            $dados = mysqli_fetch_array($resultado);
            
        endif;
         
        ?>
        <div class="container">
            <div class="card-panel">	
                <div class="row">
                    <h3>Editar Usuario</h3>
                    <form  action="funcUpdateUsuario.php" method="POST">
                        <div class="row">
                        </div>
                        <div class="msgErro col s12 "><?php include 'funcErros.php'?></div>
                        <div class="col s12">
                            <div class="input-field col s12 l5 push-l1 ">
                                <input name="email" value="<?php echo $dados['email'] ?>" type="email">
                                <label for="email" >Email</label>
                            </div>
                            <div class="input-field col s12 l5 push-l1 ">
                                <input name="senha" type="password" value="<?php echo $dados['senha'] ?>">
                                <label for="senha">Senha</label>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class=" input-field col s12 l5 push-l1 ">
                                <input name="nome"  type="text" value="<?php echo $dados['nomeUsuario'] ?>">
                                <label for="nome">Nome</label>
                            </div>
                            <div class=" input-field col s12 l5 push-l1 ">
                                <input name="CPF"  type="text" value="<?php echo $dados['CPF'] ?>">
                                <label for="CPF">CPF</label>
                            </div>
                        </div>
                        <div class="col s12">
                            
                            <div class=" input-field col s12 l5 push-l1 ">
                                <input name="telefone"  type="text" value="<?php echo $dados['telefoneUsuario'] ?>">
                                <label for="telefone">Telefone</label>
                            </div>
                            <div class=" input-field col s12 l5 push-l1 ">
                                <input name="CEP"  type="text" value="<?php echo $dados['CEP'] ?>">
                                <label for="CEP">CEP</label>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class=" input-field col s12 l5 push-l1 ">
                                <input name="numero"  type="text" value="<?php echo $dados['numeroEnder'] ?>">
                                <label for="numero">Número</label>
                            </div>
                            <div class=" input-field col s12 l5 push-l1 ">
                                <input name="ender" type="text">
                                <label for="ender">Endereço</label>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class=" input-field col s12 l5 push-l1 ">
                                <input name="bairro" type="text">
                                <label for="bairro">Bairro</label>
                            </div>
                            <div class=" input-field col s12 l5 push-l1 ">
                                <input name="cidade" type="text">
                                <label for="cidade">Cidade</label>
                            </div>
                        </div>
                        <div class="col s12 push-l3">
                            <div class=" input-field col s12 l6  ">
                                <input name="refeEnder" type="text" value="<?php echo $dados['dscComple'] ?>">
                                <label for="refeEnder">Ponto de referencia</label>
                            </div>
                        </div>

                        <div class="col s12">
                            <div class="col s6">
                                <input type="hidden" name="idUsuarioUpdate" value="<?php echo $dados['idUsuario'] ?>">
                                <button name="btnUpdateUsuario" type="submit" class="btn waves-effect waves-light col s8 push-s2">Confirmar Edição</button>
                            </div>
                            <div class=" col s6  ">
                                <a href="pageListaUsuario.php" class="btn red">CANCELAR</a>
                            </div>
                        </div>
                        
                        
                        
                    </form>
                </div>
            </div>
        </div>


    </body>
</html>
