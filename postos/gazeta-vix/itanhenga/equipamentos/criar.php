
<fieldset>
	<legend>Adicionar novo manual</legend>

	<form action="acao/criar.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Nome</th>
				<td><input type="text" name="nome" placeholder="Nome do arquivo" /></td>
			</tr>		
			<tr>
				<th>Tipo</th>
				<td><input type="text" name="tipo" placeholder="Tipo de arquivo" /></td>
			</tr>
			<tr>
				<th>Diretorio</th>
				<td><input type="text" name="diretorio" placeholder="diretorio" /></td>
			</tr>
			<tr>
				<td><button type="submit">Salvar alterações</button></td>
				<td><a href="index.php"><button type="button">Voltar</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>