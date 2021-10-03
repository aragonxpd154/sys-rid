<?php
	$servidor = "localhost";
	$usuario = "Administrador";
	$senha = "G@zeta1234";
	$dbname = "logon";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>