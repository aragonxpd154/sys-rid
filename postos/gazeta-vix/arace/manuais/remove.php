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
	<title>Remover manual</title>
</head>
<body>

<h3>Você realmente deseja remove o manual?</h3>
<form action="acao/remove.php" method="post">

	<input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
	<button type="submit">Salvar alterações</button>
	<a href="index.php"><button type="button">Voltar</button></a>
</form>

</body>
</html>

<?php
}
?>