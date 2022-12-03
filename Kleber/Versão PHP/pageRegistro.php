

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Dekas</title>

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
        
    <?php include_once 'header.php'; 
    include 'funcCriaUsuario.php';
    ?>
    
    <div class="container">
        <div class="row">
            <div id="painelRegistro" class="card-panel col s10 m8 l8 push-s1 push-m2 push-l2">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="row">
                    </div>
                    <div class="msgErro col s12 "><?php include 'funcErros.php'?></div>
                    <div class="col s12">
                        <div class="input-field col s12 l5 push-l1 ">
                            <input id="emailRegister" name="emailRegister" type="email">
                            <label for="email" >Email</label>
                        </div>
                        <div class="input-field col s12 l5 push-l1 ">
                            <input id="senhaRegister" name="senhaRegister" type="password">
                            <label for="password">Senha</label>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class=" input-field col s12 l5 push-l1 ">
                            <input name="nome" id="nome" type="text">
                            <label for="nome">Nome</label>
                        </div>
                        <div class=" input-field col s12 l5 push-l1 ">
                            <input name="CPF" id="CPF" type="text">
                            <label for="CPF">CPF</label>
                        </div>
                    </div>
                    <div class="col s12">
                        
                        <div class=" input-field col s12 l5 push-l1 ">
                            <input name="telefone" id="telefone" type="text">
                            <label for="telefone">Telefone</label>
                        </div>
                        <div class=" input-field col s12 l5 push-l1 ">
                            <input name="CEP" id="CEP" type="text">
                            <label for="CEP">CEP</label>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class=" input-field col s12 l5 push-l1 ">
                            <input name="numero" id="numero" type="text">
                            <label for="numero">Número</label>
                        </div>
                        <div class=" input-field col s12 l5 push-l1 ">
                            <input id="ender" type="text">
                            <label for="ender">Endereço</label>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class=" input-field col s12 l5 push-l1 ">
                            <input id="bairro" type="text">
                            <label for="bairro">Bairro</label>
                        </div>
                        <div class=" input-field col s12 l5 push-l1 ">
                            <input id="cidade" type="text">
                            <label for="cidade">Cidade</label>
                        </div>
                    </div>
                    <div class="col s12 push-l3">
                        <div class=" input-field col s12 l6  ">
                            <input name="refeEnder" id="refeEnder" type="text">
                            <label for="refeEnder">Ponto de referencia</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l6 push-l3">
                        <button name="btRegistro" type="submit" class="btn waves-effect waves-light col s8 push-s2">Registrar</button>
                        </div>
                    </div>
                    <!-- <button name="btRegistro" type="submit">register</button> -->
                </form>
            </div>
        </div>
    </div>
    <!-- <script>console.log('<?php echo session_id() ;?>')</script> -->

    
</body>
</html>