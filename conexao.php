<?php //session_start();

	$servidor = "sql10.freemysqlhosting.net";
	$usuario = "sql10626549";
	$senha = "le59qkVb4V";
	$db_name = "sql10626549";
	
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');
	
	date_default_timezone_set("America/Manaus");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "http://".$host_ip."/";

	$url_admin = "http://".$host_ip."/admin";

	$url_aluno = "http://".$host_ip."/home.php";
	
?>
