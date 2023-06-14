<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_hotel = $_GET['codigo_hotel'];


	$select_curso2 = mysqli_query($conexao, "SELECT * FROM curso2 WHERE codigo_hotel = $codigo_hotel");
				
	
		if (mysqli_num_rows($select_curso2) > 0) {
			
			$dados_curso2 = mysqli_fetch_assoc($select_curso2);
			
		} else {
			
			echo "<script> alert ('NÃO EXISTEM CURSOS CADASTRADOS!');</script>";
				
			echo "<script> window.location.href='$url_admin/curso';</script>";
			
			
		}
	

?>
<link rel="stylesheet" type="text/css" href="../../css/estilo.css">


		<form id="form_curso" name="form_curso" method="post" action="salvar.php" class="form_curso">

			<div><h1>ATUALIZAR HOTEL</h1></div>

				<div class="agrupamento_curso">

						<div>
							<div><label>Código</label></div>	
							<div><input type="text" id="codigo_hotel" name="codigo_hotel" value="<?php echo $dados_curso2['codigo_hotel'];?>" readonly></div>
						</div>
						<div>
							<div><label>Nome</label></div>
							<div><input type="text" id="nome_hotel" name="nome_hotel" value="<?php echo $dados_curso2['nome_hotel'];?>" required autofocus></div>
						</div>
						<div>
							<div><label>Endereço</label></div>
							<div><input type="text" id="endereco_hotel" name="endereco_hotel" value="<?php echo $dados_curso2['endereco_hotel'];?>" required autofocus></div>
						</div>	
							<div><label>Contato</label></div>
							<div><input type="text" id="contato_hotel" name="contato_hotel" value="<?php echo $dados_curso2['contato_hotel'];?>" required autofocus></div>
						<div>	
							<div><label>E-mail</label></div>
							<div><input type="text" id="email_hotel" name="email_hotel" value="<?php echo $dados_curso2['email_hotel'];?>" required autofocus></div>
						</div>	

				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>

</html>
