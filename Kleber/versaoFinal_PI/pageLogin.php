<?php 
include_once 'header.php'; 

?>


<div class="container row">
        <div class="card-panel col s12 m8 l6 push-l3 push-m2">
            <h3 class="center">Login</h3>
            <!-- Validação do formulario mais o metodo "htmlspecialchars" -->
            <!-- Assim evitando a fragilidade de fazer a validação na propria pagina PHP -->
            <!-- Possivelmente evitaremos isso, modificando o metodo de validação para um mais seguro -->
            <form action="ativaLogin.php" method="POST">
                <!-- Mensagem de erro -->
                <div class="input-field col s12">
                    <p class="msgErro center"><?php include 'ativaErro.php'; ?></p>
                </div>
                
                <div class="input-field col s11 ">
                    <i class="material-icons prefix">mail_outline</i>
                    <input name="email" class="validate" type="email">
                    <label for="email" >Email</label>
                </div>
            
                <div class="input-field col s11">
                    <i class="material-icons prefix">lock_outline</i>
                    <input name="senha" class="validate" type="password">
                    <label for="senha">Senha</label>
                </div>
                <!-- Possivel Cooke -->
                <!-- <div class="input-field col s12">
                    <label ><input type="checkbox" class="filled-in"><span>Lembre-se de mim</span></label>
                </div> -->
            
                <div class="input-field col s12">
                    <button name="btnLogin" type="submit" class="btn waves-effect waves-light col s8 push-s2">Login</button>
                </div>
                <div class="input-field s12">
                    <div class="input-field col s6 push-l2 push-m2">
                        <p class="margin medium-small"><a href="pageRegister.php">Registre-se</a></p>
                    </div>
                    <div class="input-field col s6 pull-l2 pull-m2">
                        <p class="margin right-align medium-small"><a href="#">Esqueci minha senha?</a></p>
                    </div>          
                </div>
            </form>
        </div>
</div>     


<?php include_once 'footer.php'; ?>