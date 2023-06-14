<?php require('../topo_admin.php');

	require('../../conexao.php');


	$codigo_hotel = $_GET['codigo_hotel'];

	$delete_curso2 = "DELETE FROM curso2 WHERE codigo_hotel = $codigo_hotel";
	
	
		if (mysqli_query($conexao,$delete_curso2)) {

				mysqli_close($conexao);

				echo "<script> alert ('CURSO EXCLUÍDO COM SUCESSO!');</script>";

				echo "<script> window.location.href='$url_admin/curso/exibir.php';</script>";
				
			} else {
			
				echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

				echo "<script> window.location.href='$url_admin/curso';</script>";
				
				mysqli_close($conexao);
			}
	

?>