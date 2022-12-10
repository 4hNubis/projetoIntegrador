<?php 
include_once 'header.php';
include_once 'ativaBD.php';

if(!isset($_POST['btnProdutoEdita'])){

    if(!isset($_SESSION['idProduEdita'])){
        $_SESSION['idProduEdita'] = $_POST['idProduEdita'];
         $idProdu = $_SESSION['idProduEdita'];
        $idProdu = mysqli_escape_string($connect,$idProdu);
        $sqlProdu= "SELECT * FROM produto WHERE idProdu= '$idProdu'";
        if($resultado = mysqli_query($connect, $sqlProdu)){
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($connect);
        }
    }else{
        $idProdu = $_SESSION['idProduEdita'];
        $idProdu = mysqli_escape_string($connect,$idProdu);
        $sqlProdu= "SELECT * FROM produto WHERE idProdu= '$idProdu'";
        if($resultado = mysqli_query($connect, $sqlProdu)){
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($connect);
        }
    }
}
?>

<div class="container row">
    <div class="card-panel col s12 m8 l6 push-l3 push-m2">

        <h3 class="center">Editar produto</h3>
        <div>
            <p class="center msgErro"><?php include_once 'ativaErro.php';?></p>
        </div>

        <form action="ativaProdutoEdita.php" method="POST" enctype="multipart/form-data">
            
            <div class="input-field col s12 center">
                <img src="<?php echo $dados['srcIMG']?>" id="imgCarrega" class="center-align">
                <input type="hidden" name="imgJaSalva" value="<?php echo $dados['srcIMG']?>">
                <div>
                    <p>Imagem</p>
                    <a class="btn gree col s8 m6 l4 push-l4 push-m3 push-s2" id="btnCarregaIMG" >File</a>
                    <input type="file" accept="imgProduto/*" value="" id="inpIMG" name="srcIMG">
                </div>
            </div>

            <div class="input-filed col s12">
                <div class="col s12 l5 push-l1 ">
                    <input name="nome" type="text" value="<?php echo $dados['nomeProdu']?>">
                    <label for="nome" >Nome do Produto</label>
                </div>
                <div class=" col s12 l5 push-l1 ">
                    <input name="valor" type="text" class="validate" maxlength="5" value="<?php echo $dados['valProdu']?>" minlength="1">
                    <label for="valor">Valor do Produto</label>
                </div>
            </div>

            <div class="input-filed col s12 ">
                <div class=" col s12 l5 push-l1 ">
                    <input name="peso" type="text" value="<?php echo $dados['pesoProdu']?>" class="validate" maxlength="2" >
                    <label for="peso">Peso do Produto</label>
                </div>
                <div class="col s12 l5 push-l1 ">
                    <input name="dsc" type="text" value="<?php echo $dados['dscProdu']?>"  maxlength="300" >
                    <label for="dsc">Descrição do Produto</label>
                </div>
            </div>

            <div class="input-filed col s12">
                <div class="col s12 m5 l5 input-field push-l1 push-m1">
                    <input type="hidden" name="idProduEditado" value="<?php echo $dados['idProdu']?>">
                    <button name="btnProduEditado" type="submit" class="btn waves-effect waves-light col s12">Editar Produto</button>
                </div>
                <div class=" col s12 m5 l5 input-field push-l1 push-m1">
                    <a href="index.php" class="btn red col s12">CANCELAR</a>
                </div>
            </div>

        </form>
    </div>
</div>

<?php include_once 'footer.php'?>