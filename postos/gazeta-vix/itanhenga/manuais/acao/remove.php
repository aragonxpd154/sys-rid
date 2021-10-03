<?php 

require_once '/opt/lampp/htdocs/teste/acao/conexao.php';

if($_POST) {
	$id = $_POST['id'];

	$sql = "UPDATE gv_manuais SET ativo = 2 WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Foi removido com sucesso!!</p>";
		echo "<a href='../index.php'><button type='button'>Voltar</button></a>";
	} else {
		echo "Ops, não foi possivel remover o arquivo: " . $connect->error;
	}

	$connect->close();
}

?>