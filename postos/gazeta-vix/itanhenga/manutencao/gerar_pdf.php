<?php
	include ('pdf/mpdf.php');
$nomePosto = 'Itanhenga';
$inspecao_43 = $_GET['inspecao_43'];
	$pagina = 
		"
		<html>
<body>
<h1> Relátorio de Inspeção do Posto ".$nomePosto." </h1>
<h3> Data: ".$inspecao_43."</h3>
<p>
Cada tabela começa com a tag table.
Cada linha da tabela começa com a tag
tr (tr = table row).
Cada dado da tabela começa com a tag
td (td = table data).
</p>

<h4>Uma coluna:</h4>
<table border='1'>
<tr>
  <td>100</td>
</tr>
</table>

<h4>Uma linha e três colunas:</h4>
<table border='1'>
<tr>
  <td>100</td>
  <td>200</td>
  <td>300</td>
</tr>
</table>

<h4>Duas linhas e três colunas:</h4>
<table border='1'>
<tr>
  <td>100</td>
  <td>200</td>
  <td>300</td>
</tr>
<tr>
  <td>400</td>
  <td>500</td>
  <td>600</td>
</tr>
</table>

</body>
</html>
		";

$arquivo = "/opt/lampp/htdocs/relatorio/relatorio.pdf";

$mpdf = new mPDF();
$mpdf->WriteHTML($pagina);

$mpdf->Output($arquivo, 'F' and 'I');

// I - Abre no navegador
// F - Salva o arquivo no servido
// D - Salva o arquivo no computador do usuário

?>
