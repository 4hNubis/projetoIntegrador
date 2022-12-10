<?php include_once 'header.php';?>

<div class="container row">
        <div class="card-panel col s12 m8 l8 push-m2 push-l2">
            
            <h3 class="center">Registro</h3>
            <div class="input-field col s12">
                <p class="center msgErro"><?php include 'ativaErro.php'; ?></p>
            </div>    
            
            <form action="ativaUsuarioRegister.php" method="POST">
                <div class="col s12">
                    <div class=" col s12 l5 push-l1 input-field">
                        <input name="email" class="validate" type="email">
                        <label for="email" >Email</label>
                    </div>
                    <div class="input-field col s12 l5 push-l1 ">
                        <input name="senha" class="validate" type="password" minlength="8">
                        <label for="senha">Senha</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input name="nome" type="text" minlength="3">
                        <label for="nome">Nome</label>
                    </div>
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input type="hidden" name="valCPF" id="valCPF">
                        <input id="inpCPF" name="CPF" type="text" placeholder="xxx.xxx.xxx-xx" onblur="convertCPF()" autocomplete="off" maxlength="14" minlength="14">
                        <label for="CPF">CPF</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input name="telefone"  placeholder="9xxxx-xxxx" type="tel" maxlength="9">
                        <label for="telefone">Telefone</label>
                    </div>
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input name="cep" id="cep" value="" onblur="pesquisacep(this.value);" maxlength="9" minlength="8" type="text">
                        <label for="cep">CEP</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class=" input-field col s12 l5 push-l1 ">
                        <input name="numero" id="numero" type="number" minlength="1">
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
                    <div class=" input-field col s12 l6  ">
                        <input name="dscComple" type="text" maxlength="200">
                        <label for="dscComple">Ponto de referencia</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l6 push-l3">
                    <button name="btnRegistro" type="submit" class="btn waves-effect waves-light col s8 push-s2">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
</div>

<?php include_once 'footer.php';?>