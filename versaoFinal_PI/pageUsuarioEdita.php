<?php  
include_once 'header.php';
include_once 'ativaBD.php';



if(isset($_POST['btnUsuarioEdita'])){
    $idUsu = $_POST['idUsuarioEdita'];
    $sqlUsu = "SELECT * FROM usuario WHERE idUsuario='$idUsu'";
    if( $result = mysqli_query($connect, $sqlUsu)){
        if(mysqli_num_rows($result) > 0){
            $dadosUsu = mysqli_fetch_array($result);
            mysqli_close($connect);
        }
    }
}

?>

<div class="container row">
        <div class="card-panel col s12 m8 l8 push-m2 push-l2">
            
            <h3 class="center">Edita Usuario</h3>
            <div class="input-field col s12">
                <p class="center msgErro"><?php include 'ativaErro.php'; ?></p>
            </div>    
            
            <form action="ativaUsuarioEdita.php" method="POST">
                <div class="col s12">
                    <div class="input-field col s12 l5 push-l1 ">
                        <input name="email" class="validate" value="<?php echo $dadosUsu['email'] ?>" type="email">
                        <label for="email" >Email</label>
                    </div>
                    <div class="input-field col s12 l5 push-l1 ">
                        <input name="senha" class="validate" type="password" minlength="8" value="<?php echo $dadosUsu['senha']?>">
                        <label for="senha">Senha</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input name="nome" type="text" value="<?php echo $dadosUsu['nomeUsuario']?>" minlength="3">
                        <label for="nome">Nome</label>
                    </div>
                    <div class=" input-field col s12 l5 push-l1" >
                        <input type="hidden" name="valCPF" id="valCPF" value="<?php echo $dadosUsu['CPF']?>" >
                        <input id="inpCPF" name="CPF" type="text" onclick="convertCPF()" value="<?php echo $dadosUsu['CPF']?>" placeholder="xxx.xxx.xxx-xx" autocomplete="off" maxlength="14" minlength="14">
                        <label for="CPF">CPF</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input name="telefone"  placeholder="9xxxx-xxxx" type="tel" value="<?php echo $dadosUsu['telefoneUsuario']?>" maxlength="9">
                        <label for="telefone">Telefone</label>
                    </div>
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input type="text" name="cep" id="cep" value="<?php echo $dadosUsu['CEP']?>" onblur="pesquisacep(this.value);" >
                        <label for="cep">CEP</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input name="numero" id="numero" value="<?php echo $dadosUsu['numeroEnder']?>" type="number">
                        <label for="numero">Número</label>
                    </div>
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input name="ender" id="ender" type="text">
                        <label for="ender">Endereço</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input name="bairro" id="bairro" type="text">
                        <label for="bairro">Bairro</label>
                    </div>
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input name="cidade" id="cidade" type="text">
                        <label for="cidade">Cidade</label>
                    </div>
                </div>
                    <div class="col s12 push-l3">
                    <div class=" input-field col s12 l6 ">
                        <input name="dscComple" type="text" value="<?php echo $dadosUsu['dscComple']?>">
                        <label for="dscComple">Ponto de referencia</label>
                    </div>
                </div>
                <div class="input-filed col s12">
                <div class="col s12 m5 l5 input-field push-l1 push-m1">
                    <input type="hidden" name="idUsuarioEditado" value="<?php echo $dadosUsu['idUsuario']?>">
                    <button name="btnUsuarioEditado" type="submit" class="btn waves-effect waves-light col s12">Editar Usuario</button>
                </div>
                <div class=" col s12 m5 l5 input-field push-l1 push-m1">
                    <a href="pageUsuarioLista.php"class="btn red col s12">CANCELAR</a>
                </div>
            </div>
            </form>
        </div>
</div>

<?php include_once 'footer.php';?>