<?php 

require_once '/opt/lampp/htdocs/teste/acao/conexao.php';

if($_POST) {
	$nome = $_POST['nome'];
	$tipo = $_POST['tipo'];
	$diretorio = $_POST['diretorio'];

	$id = $_POST['id'];

	$sql  = "UPDATE gv_manuais SET nome = '$nome', tipo = '$tipo', diretorio = '$diretorio' WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Atualização Realizada com Sucesso.</p>";
		echo "<a href='../edit.php?id=".$id."'><button type='button'>Voltar</button></a>";
		echo "<a href='../index.php'><button type='button'>Inicio</button></a>";
	} else {
		echo "Erro de laço na atualização : ". $connect->error;
	}

	$connect->close();

}

?>