<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Deka´s Confeitaria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Reseta os padrões dos navegadores -->
        <link rel="stylesheet" href="stylePagina/reset.css">
        <!-- Style da pagina -->
        <link rel="stylesheet" href="stylePagina/styleHome.css">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!-- iconis  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        
        <?php include_once 'header.php'; ?>

        <div id="loginPage" class="row">
            <div class="col s12 card-panel">
                <form class="login-form">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="input-field col s11 ">
                            <i class="material-icons prefix">mail_outline</i>
                            <input class="validate" id="email" type="email">
                            <label for="email" >Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s11 ">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="senha" type="password">
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
                            <a href="#" class="btn waves-effect waves-light col s10 push-s1">Login</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 push-l1">
                            <p class="margin medium-small"><a href="registroLogin.php">Registre-se</a></p>
                        </div>
                        <div class="input-field col s6 pull-l1">
                            <p class="margin right-align medium-small"><a href="#">Esqueci minha senha?</a></p>
                        </div>          
                    </div>

                </form>
            </div>
        </div>
       

    </body>
</html>
