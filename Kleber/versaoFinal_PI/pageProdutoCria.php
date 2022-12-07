<?php include_once 'header.php'?>

<div class="container">
            <div class="card-panel row">
                <h3 class="center">Criando Produto</h3>

                <br><br><br>
                <form action="ativaCriaProduto.php" method="POST" enctype="multipart/form-data">
                    <div class="col s12 push-s4">
                        <a href="#inp" class="btn gree" id="btn">File</a>
                        <input type="file" accept="imgProduto/*" id="inp" name="srcIMG">
                        <img name="img" src="" id="img" class="center-align">
                    </div>
                    <div class="col s12">
                        <div class="input-field col s12 l5 push-l1 ">
                            <input name="nome" type="text" data-length="10">
                            <label for="nome" >Nome do Produto</label>
                        </div>
                        <div class="input-field col s12 l5 push-l1 ">
                            <input name="valor" type="text" >
                            <label for="valor">Valor do Produto</label>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class=" input-field col s12 l5 push-l1 ">
                            <input name="peso"  type="text" >
                            <label for="peso">Peso do Produto</label>
                        </div>
                        <div class=" input-field col s12 l5 push-l1 ">
                            <input name="dsc" type="text">
                            <label for="dsc">Descrição do Produto</label>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="col s6">
                            <button name="btnCriaProdu" type="submit" class="btn waves-effect waves-light col s8 push-s2">Criar Produto</button>
                        </div>
                        <div class=" col s6  ">
                            <a href="pageProduto.php" class="btn red">CANCELAR</a>
                        </div>
                    </div>
                </form>
                   
                </div>
            </div>
        </div>

<!-- Vizualiza a img antes de fazer o UPLOAD no servidor -->
<script>
    let photo = document.getElementById('img');
    let file = document.getElementById('inp');
    let btn = document.getElementById('btn');

    btn.addEventListener('click', () => {
        file.click();
    });

    file.addEventListener('change', () => {

        if (file.files.length <= 0) {
            return;
        }

        let reader = new FileReader();

        reader.onload = () => {
            photo.src = reader.result;
        }

        reader.readAsDataURL(file.files[0]);
    });


</script>

<?php include_once 'footer.php'?>