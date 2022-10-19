<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Dekas</title>

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
    
    <?php include_once 'header.php' ?>

    <div id="registerPage" class="row">
        <div class="col s12 card-panel">


            <form class="register-form">
                <div class="row">
                </div>
                <div class="col s12">
                    <div class="input-field col s12 l5 push-l1 ">
                        <input id="email" type="email">
                        <label for="email" >Email</label>
                    </div>
                    <div class="input-field col s12 l5 push-l1 ">
                        <input id="senha" type="password">
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input id="nome" type="text">
                        <label for="nome">Nome</label>
                    </div>
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input id="sobreNome" type="text">
                        <label for="nome">Sobrenome</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input id="CPF" type="text">
                        <label for="CPF">CPF</label>
                    </div>
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input id="telefone" type="text">
                        <label for="telefone">Telefone</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input id="CEP" type="text">
                        <label for="CEP">CEP</label>
                    </div>
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input id="numero" type="text">
                        <label for="numero">Número</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input id="ender" type="text">
                        <label for="ender">Endereço</label>
                    </div>
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input id="bairro" type="text">
                        <label for="bairro">Bairro</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input id="cidade" type="text">
                        <label for="cidade">Cidade</label>
                    </div>
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input id="refeEnder" type="text">
                        <label for="refeEnder">Ponto de referencia</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <a href="#" class="btn waves-effect waves-light col s8 l6 push-s2 push-l3 ">Resgistrar</a>
                    </div>
                </div>


            </form>
        </div>
    </div>

</body>
</html>