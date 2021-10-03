<?php 

require_once '/opt/lampp/htdocs/teste/acao/conexao.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM gv_manuais WHERE id = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar manual</title>

	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Editar manual</legend>

	<form action="acao/update.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Nome</th>
				<td><input type="text" name="nome" placeholder="nome" value="<?php echo $data['nome'] ?>" /></td>
			</tr>		
			<tr>
				<th>Tipo</th>
				<td><input type="text" name="tipo" placeholder="tipo" value="<?php echo $data['tipo'] ?>" /></td>
			</tr>
			<tr>
				<th>Diretorio</th>
				<td><input type="text" name="diretorio" placeholder="diretorio" value="<?php echo $data['diretorio'] ?>" /></td>
			</tr>
			<tr>
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				<td><button type="submit">Salvar alterações</button></td>
				<td><a href="index.php"><button type="button">Voltar</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>

<?php
}
?>