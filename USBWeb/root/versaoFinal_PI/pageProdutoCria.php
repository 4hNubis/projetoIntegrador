<?php include_once 'header.php'?>

<div class="container row">
    <div class="card-panel col s12 m8 l6 push-l3 push-m2">

        <h3 class="center">Criando Produto</h3>
        <div>
            <p class="center msgErro"><?php include_once 'ativaErro.php';?></p>
        </div>

        <form action="ativaProdutoCria.php" method="POST" enctype="multipart/form-data">
            
            <div class="input-field col s12 center">
                <img name="img" src="" id="imgCarrega" class="center-align">
                <div>
                    <p>Imagem</p>
                    <a class="btn gree col s8 m6 l4 push-l4 push-m3 push-s2" id="btnCarregaIMG" >File</a>
                    <input type="file" accept="imgProduto/*" id="inpIMG" name="srcIMG">
                </div>
            </div>

            <div class="input-filed col s12">
                <div class="col s12 l5 push-l1 ">
                    <input name="nome" type="text">
                    <label for="nome" >Nome do Produto</label>
                </div>
                <div class=" col s12 l5 push-l1 ">
                    <input name="valor" type="text" class="validate" maxlength="5" minlength="1">
                    <label for="valor">Valor do Produto</label>
                </div>
            </div>

            <div class="input-filed col s12 ">
                <div class=" col s12 l5 push-l1 ">
                    <input name="peso" type="text" class="validate" maxlength="2" >
                    <label for="peso">Peso do Produto</label>
                </div>
                <div class="col s12 l5 push-l1 ">
                    <input name="dsc" type="text" maxlength="300">
                    <label for="dsc">Descrição do Produto</label>
                </div>
            </div>

            <div class="input-filed col s12">
                <div class="col s12 m5 l5 input-field push-l1 push-m1">
                    <button name="btnCriaProdu" type="submit" class="btn waves-effect waves-light col s12">Criar Produto</button>
                </div>
                <div class=" col s12 m5 l5 input-field push-l1 push-m1">
                    <a href="index.php" class="btn red col s12">CANCELAR</a>
                </div>
            </div>

        </form>
    </div>
</div>


<?php include_once 'footer.php'?>