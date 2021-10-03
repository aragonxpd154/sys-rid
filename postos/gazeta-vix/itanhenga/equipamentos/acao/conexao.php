<?php 

$localhost = "127.0.0.1";
$username = "Administrador";
$password = "G@zeta1234";
$dbname = "gazeta-vix";

// Criar conexão
$connect = new mysqli($localhost, $username, $password, $dbname);

// Checar conexão
if($connect->connect_error) {
	die("connection failed : " . $connect->connect_error);
} else {
	// echo "A conexão foi estabelecida com sucesso";
}

?>