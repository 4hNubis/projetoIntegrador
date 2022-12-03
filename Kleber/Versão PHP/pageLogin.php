<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Deka´s Confeitaria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <!-- Include´s -->
        <?php  
        include_once 'header.php'; 
        include_once 'funcValidacaoLogin.php';
        ?>


        <div class="container">
            <div class="row">
                <div id="painelLogin" class="col s10 m10 l6 push-l3 push-m1 push-s1 card-panel">
                    <!-- Mensagem de erro -->
                    <br><br>
                    <div class="msgErro col s12"><?php include 'funcErros.php' ?></div>
                    <!-- Validação do formulario mais o metodo "htmlspecialchars" -->
                    <!-- Assim evitando a fragilidade de fazer a validação na propria pagina PHP -->
                    <!-- Possivelmente evitaremos isso, modificando o metodo de validação para um mais seguro -->
                    <form id="fromLogin" class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="input-field col s11 ">
                                <i class="material-icons prefix">mail_outline</i>
                                <input name="email" class="validate" id="email" type="email">
                                <label for="email" >Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s11 ">
                                <i class="material-icons prefix">lock_outline</i>
                                <input name="senha" id="senha" type="password">
                                <label for="senha">Senha</label>
                            </div>
                        </div>
                        <div class="row">          
                            <div class="input-field col s10 push-s1 login-text">
                                <label><input type="checkbox"><span>Lembre-se de mim</span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button name="btEntrar" type="submit" class="btn waves-effect waves-light col s10 push-s1">Login</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6 push-l1">
                                <p class="margin medium-small"><a href="pageRegistro.php">Registre-se</a></p>
                            </div>
                            <div class="input-field col s6 pull-l1">
                                <p class="margin right-align medium-small"><a href="#">Esqueci minha senha?</a></p>
                            </div>          
                        </div>

                    </form>
                </div>
            </div>
        </div>       

    </body>
</html>
