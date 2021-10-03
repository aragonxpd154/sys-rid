<?php 

require_once '/opt/lampp/htdocs/teste/acao/conexao.php';

if($_POST) {
	$inspecao_01=@$_POST['inspecao_1'];
	$inspecao_02=@$_POST['inspecao_2'];
	$inspecao_03=@$_POST['inspecao_3'];
	$inspecao_04=@$_POST['inspecao_4'];
	$inspecao_05=@$_POST['inspecao_5'];
	$inspecao_06=@$_POST['inspecao_6'];
	$inspecao_07=@$_POST['inspecao_7'];
	$inspecao_08=@$_POST['inspecao_8'];
	$inspecao_09=@$_POST['inspecao_9'];
	$inspecao_10=@$_POST['inspecao_10'];
	$inspecao_11=@$_POST['inspecao_11'];
	$inspecao_12=@$_POST['inspecao_12'];
	$inspecao_13=@$_POST['inspecao_13'];
	$inspecao_14=@$_POST['inspecao_14'];
	$inspecao_15=@$_POST['inspecao_15'];
	$inspecao_16=@$_POST['inspecao_16'];
	$inspecao_17=@$_POST['inspecao_17'];
	$inspecao_18=@$_POST['inspecao_18'];
	$inspecao_19=@$_POST['inspecao_19'];
	$inspecao_20=@$_POST['inspecao_20'];
	$inspecao_21=@$_POST['inspecao_21'];
	$inspecao_22=@$_POST['inspecao_22'];
	$inspecao_23=@$_POST['inspecao_23'];
	$inspecao_24=@$_POST['inspecao_24'];
	$inspecao_25=@$_POST['inspecao_25'];
	$inspecao_26=@$_POST['inspecao_26'];
	$inspecao_27=@$_POST['inspecao_27'];
	$inspecao_28=@$_POST['inspecao_28'];
	$inspecao_29=@$_POST['inspecao_29'];
	$inspecao_30=@$_POST['inspecao_30'];
	$inspecao_31=@$_POST['inspecao_31'];
	$inspecao_32=@$_POST['inspecao_32'];
	$inspecao_33=@$_POST['inspecao_33'];
	$inspecao_34=@$_POST['inspecao_34'];
	$inspecao_35=@$_POST['inspecao_35'];
	$inspecao_36=@$_POST['inspecao_36'];
	$inspecao_37=@$_POST['inspecao_37'];
	$inspecao_38=@$_POST['inspecao_38'];
	$inspecao_39=@$_POST['inspecao_39'];
	$inspecao_40=@$_POST['inspecao_40'];
	$inspecao_41=@$_POST['inspecao_41'];
	$inspecao_42=@$_POST['inspecao_42'];
	$inspecao_44=@$_POST['inspecao_44'];
	$usuarioLoginA=('marcos');
	//$dataBit=date ("Y-m-d");
	$dataBit=('dhdf');
	//$usuarioLoginA=$_SESSION['user_name'];
	//$ativo=('1');
	//$nome = $_POST['nome'];
	//$tipo = $_POST['tipo'];
	//$diretorio = $_POST['diretorio'];

	$sql = "INSERT INTO gv_laudo_equipamentos_itanhenga (insp_visual_gerador_MG, insp_nivel_agua_MG, ver_conexao_bateria_MG,  ver_conexao_linha_combustivel_MG, ver_nivel_combustivel_tanque_MG, limp_maquina_MG, insp_visual_QTA_MG, insp_visual_maquina_RT, ver_temperatura_ruido_RT, insp_visual_bateria_RT, limp_maquina_RT, insp_visual_QDG_RT, insp_visual_maquina_AC, ver_temp_ruido_AC, ver_log_eventos_status_AC, ver_eficiência_e_vazao_AC, insp_serpentina_filtro_de_ar_AC, insp_do_dreno_AC, insp_visual_dos_transmissores_RADIO1250khz, insp_visual_das_conexoes_eletrica_RADIO1250khz, insp_visual_das_conexoes_rf_RADIO1250khz, ver_leituras_dos_equipamentos_RADIO1250khz, ver_temperatura_dos_equipamentos_RADIO1250khz, limp_equipamentos_RADIO1250khz, insp_visual_dos_transmissores_RADIO820khz, insp_visual_das_conexoes_eletrica_RADIO820khz, insp_visual_das_conexoes_rf_RADIO820khz, ver_leitura_dos_equipamentos_RADIO820khz, ver_temperatura_dos_equipamentos_RADIO820khz, limp_dos_equipamentos_RADIO820khz, insp_visual_dos_radios_LA, insp_visual_das_conexoes_eletrica_LA, insp_visual_das_conexoes_rf_LA, ver_leituras_dos_equipamentos_LA, ver_temperatura_dos_equipamentos_LA, limp_dos_equipamentos_LA, insp_visual_do_patio_jardim_e_pomar_HAB, ver_caixa_dagua_HAB, ver_iluminacao_interna_e_externa_HAB, ver_limp_geral_HAB, observacao, data, executor, usuario) VALUES ('$inspecao_01', '$inspecao_02', '$inspecao_03', '$inspecao_04', '$inspecao_05', '$inspecao_06', '$inspecao_07', '$inspecao_08', '$inspecao_09', '$inspecao_10', '$inspecao_11', '$inspecao_12', '$inspecao_13', '$inspecao_14', '$inspecao_15', '$inspecao_16', '$inspecao_17', '$inspecao_18', '$inspecao_19', '$inspecao_20', '$inspecao_21', '$inspecao_22', '$inspecao_23', '$inspecao_24', '$inspecao_25', '$inspecao_26', '$inspecao_27', '$inspecao_28', '$inspecao_29', '$inspecao_30', '$inspecao_31', '$inspecao_32', '$inspecao_33', '$inspecao_34', '$inspecao_35', '$inspecao_36', '$inspecao_37', '$inspecao_38', '$inspecao_39', '$inspecao_40', '$inspecao_41', '$inspecao_42', '$dataBit', '$inspecao_44', '$usuarioLoginA')";
	if($connect->query($sql) === TRUE) {
		echo "<p>Novo Laudo cadastrado</p>";
		echo "<a href='../create.php'><button type='button'>Voltar</button></a>";
		echo "<a href='../index.php'><button type='button'>Inicio</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>