<?php require('../topo_admin.php');

	require('../../conexao.php');


	$select_curso2 = mysqli_query($conexao, "SELECT * FROM curso2 ORDER BY codigo_hotel ASC");
				
	
		if (mysqli_num_rows($select_curso2) > 0) {
			
			$dados_curso2 = mysqli_fetch_assoc($select_curso2);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM CURSOS CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/curso';</script>";
			
			
		}


?>



		<div class="estila_tabela">

			<div><h1>CURSOS CADASTRADOS</h1></div>

				<table>
					
					<tr class="tabela_cabecalho">

						<td>CÓDIGO</td>
						<td>NOME</td>
						<td>ENDEREÇO</td>
						<td>CONTATO</td>
						<td>E-MAIL</td>
						<td colspan="2">Ação</td>

					</tr>



				<?php do{


					?>
					
					<tr>

						<td><?php echo $dados_curso2['codigo_hotel'];?></td>
						<td><?php echo $dados_curso2['nome_hotel'];?></td>
						<td><?php echo $dados_curso2['endereco_hotel'];?></td>
						<td><?php echo $dados_curso2['contato_hotel'];?></td>
						<td><?php echo $dados_curso2['email_hotel'];?></td>
						<td>

							<a href="editar.php?codigo_hotel=<?php echo $dados_curso2['codigo_hotel'];?>">
								<img src="../../img/editar.png" class="botao_acao" title="Editar">
							</a>
						</td>

						<td>

							<a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_curso2['codigo_hotel'];?>')">
								<img src="../../img/excluir.png" class="botao_acao" title="Excluir">
							</a>
						</td>
						
					</tr>

				<?php }while ($dados_curso2 = mysqli_fetch_assoc($select_curso2));?>

				</table>

		</div>

</body>

</html>