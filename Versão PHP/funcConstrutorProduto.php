<?php
    include_once 'funcConnecDekasBD.php';
    $sql="SELECT * FROM produto";
    $resultado= mysqli_query($connect,$sql);
    if (mysqli_num_rows($resultado)>0):
        while($dados =mysqli_fetch_array($resultado)):	
?>
            <!-- Esqueleto de produto -->   
            <li nome="<?php echo $dados['nomeProdu']?>" class="col s12 m6 l4 card-panel">
                <td class="imgProduto"><img id="img" src=<?php echo $dados['srcIMG'] ?> alt="brigadeiro"></td>
                <td class="nomeProduto"><?php echo $dados['nomeProdu'] ?></td>
                <td class="valorProduto"><?php echo $dados['valProdu'] ?></td>
                <td><i class="material-icons"></i></td>
            </li>
        <?php 
        endwhile; 
        else: ?>
    <!-- Se não for acahado nada no BD adicionar uma mensagem de erro -->
    <?php
    endif;
    ?>