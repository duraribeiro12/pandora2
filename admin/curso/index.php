<?php require('../topo_admin.php');?>



	<form id="form_curso" name="form_curso" method="post" action="salvar.php" class="form_curso">

			<div><h1>CADASTRAR HOTEL</h1></div>

				<div class="agrupamento_curso">

						<div>
							<div><label>Nome do Hotel</label></div>	

							<div><input type="text" id="nome_hotel" name="nome_hotel" required autofocus></div>

							<div><label>Endereço completo</label></div>	

							<div><input type="text" id="endereco_hotel" name="endereco_hotel" required autofocus></div>

							<div><label>Contato</label></div>	

							<div><input type="text" id="contato_hotel" name="contato_hotel" required autofocus></div>

							<div><label>E-mail</label></div>	

							<div><input type="text" id="email_hotel" name="email_hotel" required autofocus></div>		
						</div>

						
				</div>

				<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Salvar"></div>

		</form>

</body>


</html>