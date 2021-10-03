<?php 

require_once '/opt/lampp/htdocs/conexao/conexao.php';

if($_POST) {
	$nome = $_POST['nome'];
	$sufixo = $_POST['sufixo'];
	$firmware = $_POST['firmware'];
	$numeroSerie = $_POST['numeroSerie'];
	$patrimonio = $_POST['patrimonio'];
	$posto = $_POST['posto'];

	$id = $_POST['id'];

	$sql  = "UPDATE gv_equipamentos SET nome = '$nome', sufixo = '$sufixo', firmware = '$firmware', numeroSerie = '$numeroSerie', patrimonio = '$patrimonio', posto = '$posto' WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Atualização Realizada com Sucesso.</p>";
		echo "<a href='../edit.php?id=".$id."'><button type='button'>Voltar</button></a>";
		echo "<a href='../index.php'><button type='button'>Inicio</button></a>";
		header("Refresh: 2; url=/postos/gazeta-vix/itanhenga/equipamentos/index.php");
	} else {
		echo "Erro na atualização Entre em contato com Administrador do Sistema: ". $connect->error;
		echo "Redirecionando ... em 5 segundos";
		header("Refresh: 5;url=índex.php");

	}

	$connect->close();

}

?>