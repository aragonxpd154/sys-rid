<?php
session_start();
	include ('pdf/mpdf.php');
$nomePosto = 'Itanhenga';
$inspecao_43 = $_GET['inspecao_43'];
$inspecao_44 = $_GET['inspecao_44'];
$inspecao_1 = $_GET['inspecao_1'];
$inspecao_2 = $_GET['inspecao_2'];
$inspecao_3 = $_GET['inspecao_3'];
$inspecao_4 = $_GET['inspecao_4'];
$inspecao_5 = $_GET['inspecao_5'];
$inspecao_6 = $_GET['inspecao_6'];
$inspecao_7 = $_GET['inspecao_7'];
$inspecao_8 = $_GET['inspecao_8'];
$inspecao_9 = $_GET['inspecao_9'];
$inspecao_10 = $_GET['inspecao_10'];
$inspecao_11 = $_GET['inspecao_11'];
$inspecao_12 = $_GET['inspecao_12'];
$inspecao_13 = $_GET['inspecao_13'];
$inspecao_14 = $_GET['inspecao_14'];
$inspecao_15 = $_GET['inspecao_15'];
$inspecao_16 = $_GET['inspecao_16'];
$inspecao_17 = $_GET['inspecao_17'];
$inspecao_18 = $_GET['inspecao_18'];
$inspecao_19 = $_GET['inspecao_19'];
$inspecao_20 = $_GET['inspecao_20'];
$inspecao_21 = $_GET['inspecao_21'];
$inspecao_22 = $_GET['inspecao_22'];
$inspecao_23 = $_GET['inspecao_23'];
$inspecao_24 = $_GET['inspecao_24'];
$inspecao_25 = $_GET['inspecao_25'];
$inspecao_26 = $_GET['inspecao_26'];
$inspecao_27 = $_GET['inspecao_27'];
$inspecao_28 = $_GET['inspecao_28'];
$inspecao_29 = $_GET['inspecao_29'];
$inspecao_30 = $_GET['inspecao_30'];
$inspecao_31 = $_GET['inspecao_31'];
$inspecao_32 = $_GET['inspecao_32'];
$inspecao_33 = $_GET['inspecao_33'];
$inspecao_34 = $_GET['inspecao_34'];
$inspecao_35 = $_GET['inspecao_35'];
$inspecao_36 = $_GET['inspecao_36'];
$inspecao_37 = $_GET['inspecao_37'];
$inspecao_38 = $_GET['inspecao_38'];
$inspecao_39 = $_GET['inspecao_39'];
$inspecao_40 = $_GET['inspecao_40'];
$inspecao_41 = $_GET['inspecao_41'];
$inspecao_42 = $_GET['inspecao_42'];
$usuario = $_SESSION['user_name'];
$hora = date('H:i:s');

	$pagina =
		"
		<html>
<body>
<h1> Relátorio de Inspeção do Posto ".$nomePosto." </h1>
<h3> Data da inspeção: ".$inspecao_43."</h3>
<h3> Equipe: ".$inspecao_44."</h3>
<p>
</p>

    <h4> Grupo de Moto Gerador 1 </h4>
<table border='1'>
<tr>
  <td>Inspeção Visual do Gerador GMG</td>
  <td>".$inspecao_1."</td>
</tr>
<tr>
  <td>Verificação Nível de Água</td>
  <td>".$inspecao_2."</td>
</tr>
<tr>
  <td>Verificação Conexão da Bateria</td>
  <td>".$inspecao_3."</td>
</tr>
<tr>
  <td>Verificação Conexão da Linha de Combustível</td>
  <td>".$inspecao_4."</td>
</tr>
<tr>
  <td>Verificação Nível de Combustível e Tanque</td>
  <td>".$inspecao_5."</td>
</tr>
<tr>
  <td>Limpeza da Maquina</td>
  <td>".$inspecao_6."</td>
</tr>
<tr>
  <td>Inspeção Visual do QTA</td>
  <td>".$inspecao_7."</td>
</tr>
</table>

<h4> Regulador de Tensão </h4>

<table border='1'>
<tr>
  <td>Inspeção Visual da Maquina</td>
  <td>".$inspecao_8."</td>
</tr>
<tr>
  <td>Verificação Temperatura e Ruído</td>
  <td>".$inspecao_9."</td>
</tr>
<tr>
  <td>Inspeção Visual das Baterias</td>
  <td>".$inspecao_10."</td>
</tr>
<tr>
  <td>Limpeza da Maquina</td>
  <td>".$inspecao_11."</td>
</tr>
<tr>
  <td>Inspeção Visual QDG</td>
  <td>".$inspecao_12."</td>
</tr>
</table>





<h4> Ar Condicionado </h4>
<table border='1'>
<tr>
  <td>Inspeção Visual da Maquina</td>
  <td>".$inspecao_13."</td>
</tr>
<tr>
  <td>Inspeção Visual QDG</td>
  <td>".$inspecao_14."</td>
</tr>
<tr>
  <td>Verificação de Temperatura e Ruído</td>
  <td>".$inspecao_15."</td>
</tr>
<tr>
  <td>Verificação de LOG, Eventos e Status</td>
  <td>".$inspecao_16."</td>
</tr>
<tr>
  <td>Verificação de Eficiência e Vazão</td>
  <td>".$inspecao_17."</td>
</tr>
<tr>
  <td>Inspeção da Serpentina e Filtro de Ar</td>
  <td>".$inspecao_18."</td>
</tr>
<tr>
  <td>Inspeção do Dreno</td>
  <td>".$inspecao_19."</td>
</tr>
</table>




<h4> Radios 1250kHz </h4>
<table border='1'>
<tr>
  <td>Inspeção Visual dos Transmissores</td>
  <td>".$inspecao_20."</td>
</tr>
<tr>
  <td>Inspeção Visual das Conexões Elétrica</td>
  <td>".$inspecao_21."</td>
</tr>
<tr>
  <td>Inspeção Visual das Conexões RF</td>
  <td>".$inspecao_22."</td>
</tr>
<tr>
  <td>Verificação de Leituras dos Equipamentos</td>
  <td>".$inspecao_23."</td>
</tr>
<tr>
  <td>Verificação de Temperatura dos Equipamentos</td>
  <td>".$inspecao_24."</td>
</tr>
<tr>
  <td>Limpeza dos Equipamentos</td>
  <td>".$inspecao_25."</td>
</tr>
</table>





<h4> Radios 820kHz </h4>
<table border='1'>
<tr>
  <td>Inspeção Visual dos Transmissores</td>
  <td>".$inspecao_26."</td>
</tr>
<tr>
  <td>Inspeção Visual das Conexões Elétrica</td>
  <td>".$inspecao_27."</td>
</tr>
<tr>
  <td>Inspeção Visual das Conexões RF</td>
  <td>".$inspecao_28."</td>
</tr>
<tr>
  <td>Verificação de Leituras dos Equipamentos</td>
  <td>".$inspecao_29."</td>
</tr>
<tr>
  <td>Verificação de Temperatura dos Equipamentos</td>
  <td>".$inspecao_30."</td>
</tr>

<tr>
  <td>Limpeza dos Equipamentos	</td>
  <td>".$inspecao_31."</td>
</tr>
</table>




<h4> Links de Audio </h4>
<table border='1'>
<tr>
  <td>Inspeção Visual dos Rádios</td>
  <td>".$inspecao_32."</td>
</tr>

<tr>
  <td>Inspeção Visual das Conexões Elétrica</td>
  <td>".$inspecao_33."</td>
</tr>

<tr>
  <td>Inspeção Visual das Conexões RF</td>
  <td>".$inspecao_34."</td>
</tr>

<tr>
  <td>Verificação de Leituras dos Equipamentos</td>
  <td>".$inspecao_35."</td>
</tr>

<tr>
  <td>Verificação de Temperatura dos Equipamentos</td>
  <td>".$inspecao_36."</td>
</tr>
<tr>
  <td>Limpeza dos Equipamentos</td>
  <td>".$inspecao_37."</td>
 </table>




<h4> Habitação </h4>
<table border='1'>
</tr>
<tr>
  <td>Inspeção Visual do Pátio Jardim e Pomar</td>
  <td>".$inspecao_38."</td>
</tr>
<tr>
  <td>Verificação Caixa d' Agua	</td>
  <td>".$inspecao_39."</td>
</tr>
<tr>
  <td>Verificação da Iluminação Interna e Externa</td>
  <td>".$inspecao_40."</td>
</tr>
<tr>
  <td>Verificação Limpeza em Geral</td>
  <td>".$inspecao_41."</td>
</tr>
</table>


<h2>Observação</h2>
<p></p>
<h3>".$inspecao_42."</h3>

<p></p>
<p></p>
<p></p>
<p>Relatório adicionado pelo usuario </br>".$usuario.", no dia ".$inspecao_43." às ".$hora.".</br>
</p>


</body>
</html>
		";
// Remove />
$removerBar = str_replace("/", ".", $inspecao_43);
$arquivo = "/opt/lampp/htdocs/relatorio/relatorio_".$nomePosto."_".$removerBar."_".$hora.".pdf";

$mpdf = new mPDF();
$mpdf->WriteHTML($pagina);

$mpdf->Output($arquivo, 'F');

// I - Abre no navegador
// F - Salva o arquivo no servido
// D - Salva o arquivo no computador do usuário
 
header('Refresh: 1; url=/relatorio/'); 


?>
