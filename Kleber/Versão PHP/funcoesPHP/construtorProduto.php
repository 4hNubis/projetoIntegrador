<?php
    $sql="SELECT * FROM produto";
    $resultado= mysqli_query($connect,$sql);
    if (mysqli_num_rows($resultado)>0):
        while($dados =mysqli_fetch_array($resultado)):	
?>
            <!-- Esqueleto de produto -->
            <div id="produto" class="col s12 m6 l4"><a href="">
                <div class="imgProduto"><img id="img" src=<?php echo $dados['srcIMG'] ?> alt="brigadeiro"></div>
                <div class="nomeProduto"><?php echo $dados['nomeProdu'] ?></div>
                <div class="valorProduto"><?php echo $dados['valProdu'] ?></div>
                <div><i class="material-icons"></i></div>
            </a></div>
        <?php 
        endwhile; 
        else: ?>
    <!-- Se não for acahado nada no BD adicionar uma mensagem de erro -->
    <?php
    endif;
    ?>