<?php 

require_once '/opt/lampp/htdocs/teste/acao/conexao.php';

if($_POST) {
	$nome = $_POST['nome'];
	$tipo = $_POST['tipo'];
	$diretorio = $_POST['diretorio'];

	$sql = "INSERT INTO gv_manuais (nome, tipo, diretorio, ativo) VALUES ('$nome', '$tipo', '$diretorio', 1)";
	if($connect->query($sql) === TRUE) {
		echo "<p>Novo manual cadastrado</p>";
		echo "<a href='../create.php'><button type='button'>Voltar</button></a>";
		echo "<a href='../index.php'><button type='button'>Inicio</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>