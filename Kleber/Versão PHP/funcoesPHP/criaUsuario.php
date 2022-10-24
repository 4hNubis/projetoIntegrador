<!-- 
<div id="painelRegister" class="row">
        <div class="col s10 m8 l8 push-s1 push-m2 push-l2 card-panel">
        <div class="msgErro col s12"><?php include 'funcoesPHP/erros.php' ?></div>
        <form id="formRegister"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="row">
            </div>
            <div class="col s12">
            <div class="msgErro col s12 "><?php include 'funcoesPHP/erros.php'?></div>
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
                <button name="btRegistrar" type="submit" class="btn waves-effect waves-light col s8 push-s2">Registrar</button>
                </div>
            </div>


        </form>
    </div>
</div> -->

<?php

//Inicia a conexão com o BD Dekas
require_once 'connecDekasBD.php';


//se existir o indice btn_entrar , é porque alguem clicou no botão
if (isset($_POST['btRegistro'])):
	
	$erros = array();
	//mysqli_escape_string - função que limpa os dados e evita sqlinjection e outros caracteres indevidos.
	$email = mysqli_escape_string($connect, $_POST['emailRegister']);
	$senha = mysqli_escape_string($connect, $_POST['senhaRegister']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $CPF = mysqli_escape_string($connect, $_POST['CPF']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $CEP = mysqli_escape_string($connect, $_POST['CEP']);
	$numero = mysqli_escape_string($connect, $_POST['numero']);
    $dscComple = mysqli_escape_string($connect, $_POST['refeEnder']);
    
    if(empty($nome)):

        $erros[] = "<p> Todos os campos devem estar preencidos </p>";
        echo '<script>console.log("Era pra mostrar o erro")</script>';

    else:
        echo '<script>console.log("Passou do if")</script>';
        //criptografando a senha no mode BCrypt para salvar o hash criado no BD
        $senha = $senha;
        // O insert com os dados que serão salvos no BD
        $sql = "INSERT INTO usuario(idUsuario, CPF, email, senha, nomeUsuario, telefoneUsuario, CEP, numeroEnder, dscComple, admin) VALUES ( NULL, '$CPF', '$email', '$senha', '$nome', '$telefone', '$CEP', '$numero', '$dscComple', NULL)";
        // Executa o sql
        // Confirma se foi criado o novo Usuario
        if(mysqli_query($connect,$sql)):
            header('Location: ');
        else:
            
        endif;

    endif;
    
endif;
?>