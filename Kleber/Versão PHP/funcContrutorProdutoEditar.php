<?php
    include_once 'funcConnecDekasBD.php';
    $sql="SELECT * FROM produto";
    $resultado= mysqli_query($connect,$sql);
    if (mysqli_num_rows($resultado)>0):
        while($dados =mysqli_fetch_array($resultado)):	
?>
            <!-- Esqueleto de produto -->
            <tr id="produto" class="col s12 m5 l3 card-panel ">
                <td class="imgProduto"><img id="img" src=<?php echo $dados['srcIMG'] ?> alt="brigadeiro"></td>
                <td class="nomeProduto"><?php echo $dados['nomeProdu'] ?></td>
                <td class="valorProduto"><?php echo $dados['valProdu'] ?></td>
                
                <td>
                    <a href="pageEditaProdutoEdit.php?id=<?php echo $dados['idProdu'] ?>" class="btn-floating orange modal-trigger"><i class="material-icons">edit</i></a> 
                    <a href="#modal<?php echo $dados['idProdu'];?>" class="btn-floating red modal-trigger" ><i class="material-icons">delete</i></a>
                </td>
			

				<!-- Modal Deletar Usuario
					Modal para apagar um Usuario -->
                    <div id="modal<?php echo $dados['idProdu'];?>" class="modal">
                        <div class="modal-content">
                            <h3>Apagar Produto</h3>
							<p>Você tem certeza que deseja deletar permanentemente o produto <?php echo $dados['nomeProdu']?> do Bando de Dados? Se sim, clique em DELETAR</p>
                        </div>
                        <div class="modal-footer">
							<form action="funcApagarProduto.php" method="post">
								<input type="hidden" name="idProduApagar" value="<?php echo $dados['idProdu']?>">
								<button name="btnApagarUsuario" type="submit" class="btn red">DELETAR</button>
							</form>
							<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                        </div>
                    </div>
            </tr>
            <tr class="col s1"></tr>
            
        <?php 
        endwhile; 
        else: ?>
    <!-- Se não for acahado nada no BD adicionar uma mensagem de erro -->
    <?php
    endif;
    ?>

<script>
// Modal
const elemsModal = document.querySelectorAll(".modal");
const instancesModal = M.Modal.init(elemsModal);
</script>