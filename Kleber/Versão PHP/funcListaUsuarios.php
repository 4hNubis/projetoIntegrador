<?php
    include_once 'funcConnecDekasBD.php';
	include 'funcIniciaSessao.php';
    $sql="SELECT * FROM usuario";
    $resultado= mysqli_query($connect,$sql);
	mysqli_close($connect);
    if (mysqli_num_rows($resultado)>0):
        while($dados =mysqli_fetch_array($resultado)):	
?>
        <div>
            <tr id="listaUsuarios">
				<td><?php echo $dados['idUsuario']?></td>
				<td><?php echo $dados['nomeUsuario']?></td>
				<td><?php echo $dados['CPF']?></td>
				<td><?php echo $dados['email']?></td>

				<td><a href="pageEditaUsuario.php?id=<?php echo $dados['idUsuario']?>" class="btn-floating orange modal-trigger"><i class="material-icons">edit</i></a> </td>
				<td><a href="#modal<?php echo $dados['idUsuario'];?>" class="btn-floating red modal-trigger" ><i class="material-icons">delete</i></a> </td>

				<!-- Modal Deletar Usuario -->
					<!-- Modal para apagar um Usuario -->
                    <div id="modal<?php echo $dados['idUsuario'];?>" class="modal">
                        <div class="modal-content">
                            <h3>Apagar Usuario</h3>
							<p>Você tem certeza que deseja deletar permanentemente o usuario <?php echo $dados['nomeUsuario']?> do Bando de Dados? Se sim, clique em DELETAR</p>
                        </div>
                        <div class="modal-footer">
							<form action="funcApagaUsuario.php" method="post">
								<input type="hidden" name="idUsuarioApagar" value="<?php echo $dados['idUsuario']?>">
								<button name="btnApagarUsuario" type="submit" class="btn red">DELETAR</button>
							</form>
							<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                        </div>
                    </div>

			</tr>
            </div>
			<?php 
			endwhile; 
			else: ?>
				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
			<?php
			endif;
			?>
		
<script>
// Modal
const elemsModal = document.querySelectorAll(".modal");
const instancesModal = M.Modal.init(elemsModal);
</script>