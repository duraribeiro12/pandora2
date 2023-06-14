<?php require('../../conexao.php');
	//VERIFICANDO DADOS PARA ATUALIZAR
	if (isset($_POST['codigo_hotel'])) {

		$codigo_hotel = $_POST['codigo_hotel'];      
		$nome_hotel = $_POST['nome_hotel'];
		$endereco_hotel = $_POST['endereco_hotel'];
		$contato_hotel = $_POST['contato_hotel'];
		$email_hotel = $_POST['email_hotel'];

		$update_curso2 = "UPDATE `curso2` SET `nome_hotel`='".$nome_hotel."',`endereco_hotel`='".$endereco_hotel."',`contato_hotel`='".$contato_hotel."',`email_hotel`='".$email_hotel."' WHERE `codigo_hotel` = ".$codigo_hotel.";";

		if (mysqli_query($conexao,$update_curso2)) {

				mysqli_close($conexao);

				echo "<script> alert ('HOTEL ATUALIZADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/curso/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ATUALIZAR.');</script>";

				echo "<script> window.location.href='$url_admin/curso';</script>";
				
				mysqli_close($conexao);
			}

	}else if (isset($_POST['nome_hotel'])) {      
	
		$nome_hotel = $_POST['nome_hotel'];
		$endereco_hotel = $_POST['endereco_hotel'];
		$contato_hotel = $_POST['contato_hotel'];
		$email_hotel = $_POST['email_hotel'];


		$insert_curso2 = "INSERT INTO curso2 (nome_hotel, endereco_hotel, contato_hotel, email_hotel) VALUES ('".$nome_hotel."', '".$endereco_hotel."', '".$contato_hotel."', '".$email_hotel."')";
	
	
		if (mysqli_query($conexao,$insert_curso2)) {

				mysqli_close($conexao);

				echo "<script> alert ('HOTEL CADASTRADO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/curso/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL CADASTRAR.');</script>";

				echo "<script> window.location.href='$url_admin/curso';</script>";
				
				mysqli_close($conexao);
			}

	} 

?>