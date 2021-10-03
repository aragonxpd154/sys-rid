<!-- Author: Marcos Silva\n
Author URL: "http://aragones.esy.es/rid-pro/""
Date: 09/07/2018
Licence="Creative Commons Attribution 2.0 Unported"
Licence URL: "https://creativecommons.org/licenses/by/2.0/br/
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="Content-Type" content='text/html'>
        <meta name='description' content='Pagina de Consulta Aracê'>
        <meta name='keyword' content='system, rid-pro, monitoramento, consulta, aracê, posto, aracê, pagina, api'>
        <meta name='generator' content='RID PRO API'>
		<script type='text/javascript' src='/js/mapaload1/mapaload1.js'></script>
		<script type='text/javascript' src='/js/mapaload1/OpenLayers.js'></script>
		<script type='text/javascript' src='/js/mapaload1/OpenStreetMap.js'></script>
        <script type="text/javascript" src="jquery_1.4_jquery.min.js"></script>
		<link rel='shortcut icon' type='image/png' href='/imagens/favicon.ico'>
		<title>| Aracê |</title>

        <!-- Fontes do Google -->

        <link href='http://fonts.googleapis.com/css?family=Montserrat:300,300i,400i,500,500i,600,600i,700' rel='stylesheet'>

        <!-- Folha de Estilo do Corpo da Página padrão -->

        <link href='/css/font-awesome.min.css' rel='stylesheet'>

        <!-- Reiniciador do CSS -->

        <link href='/css/normalize.css' rel='stylesheet'>

        <!-- Folha de CSS Do Minigram -->

        <link href='/css/milligram.min.css' rel='stylesheet'>

        <!-- Estilo CSS do Corpor PHP e HTML 
        Cuido com o Escopo desse Styles.css quando realizar o back-end-->

        <link href='/css/styles.css' rel='stylesheet'>

        <!-- [Execute se for libera ao IE Versão >= 9.0]>
        <[if lt IE 9]>
        <script src='css/html5'</script>
        <![endif]-->
		<script type='text/javascript'>
		// Esse script destroi o DIV de Mensagem de Envio de Dados referente o Content div 'mensagemEnvio'
		// Esse script destroi o DIV de Mensagem de Envio de Dados referente o Content div 'mensagemEnvio'
		function destruirDIV()
		{
			var mensagem_obj1=document.getElementById('mensagemEnvioOK');
			mensagem_obj1.style.display='none';
								
			var mensagem_obj3=document.getElementById('mensagemEnvioUploadOK');
			mensagem_obj13style.display='none';
		}
		
		function destruirDIVSec()
		{
			var mensagem_obj2=document.getElementById('mensagemEnvioUploadError');
			mensagem_obj2.style.display='none';
			
			var mensagem_obj4=document.getElementById('mensagemERROR');
			mensagem_obj4.style.display='none';
		}
		setTimeout('destruirDIV()', 8000);
		setTimeout('destruirDIVSec()', 12000);
		</script>
</head>
        <body> <!-- BGCOLOR='FFFFFF' TEXT='000000' LINK='0000FF' VLINK='0000FF' marginwidth=0 marginheight=0 leftmargin=0 topmargin=0>
             <table border=0 width=100% border=0 cellpadding=0 cellspacing=0>
                 <tr><td bgcolor=000000 width =100% height=3 colspan=2><img src='' border=0 width=1 height=3>
</td></tr> -->
<div class='navbar'>
                <div class='row'>
                <div class='column column-30 col-site-title'><img src='/imagens/redegazetaLogo.png' width='140' height='auto' class='site-title float-left'>
</div>
<div class='column column-50' class='site-title'><a href='#'></a> 
                <!-- Titulo -->
                <center><h1>TECNOLOGIA</h1>
                </center>
</div>
<div class='column column-50' style="position:absolute; margin-top:85px; transform:translateX(70%);" ><a href='#'></a> 
<!-- Menu -->
<nav>
<ul class='menususpense'>
<li><a href='#'> Home </a></li>
<li><a href='#'> Postos </a>

<ul>

<li><a href='#'> Gazeta Vix </a></li>
<li><a href='#'> Gazeta Norte </a></li>
<li><a href='#'> Gazeta Noroeste </a></li>
<li><a href='#'> Gazeta Sul </a></li>
</ul>

</li>

<li><a href='#'> Serviços </a></li>
<li><a href='#'> Documentação </a></li>
<li><a href='#'> Contato </a></li>

</ul>
</nav>
</div>
<div class ='column column-30'>
    <!--Redirecionar para pagina de login -->
    <div class='user-section'><a href='#'>
        <img src='/imagens/meu_perfil.png' alt='profile photo' class='circle float-left profile-photo' width='50' height='auto'>
        <div class='username'>
            <h4>Login</h4>
            <!-- Nome do usuario -->
            <p></p>
            <!-- Script Perl/Python -->
        <!--Menu suspenso para incluir dentro do CSS modificar estrutura navbar e criar uma navbarmenu -->
    </div>
</a>
</div>
</div>
</div>
</div>
<!-- Incluir o Jquery nesse limite -->
<div class='row'>
    <div id='sidebar' class='column'>
        <h5>Navegação</h5>
<ul>
    <li>
        <a href='\postos\gazeta-vix\arace\'><em class="fa fa-home"></em> Voltar</a></li>
		<p></p>
		<li><a href='\gazeta-vix\arace\manuais\inserir\'><em class='fa fa-home'></em>Cadastrar um Manual</a></li>		
</ul>
</div>
<section id='main-content' class='column column-offset-20'>
    <div class='row grid-responsive'>
        <div class='column page-heading'>
            <div class='large-card'>
                
            <!-- Será incluido o script Perl em paralelo com Python v3.0, a intuito do script é realizar a mudanção do crapp da pagina php, por inserção no banco de dado
        Esse sera desenvolvido em paralelo com a pagina e depois sera incluindo com um spin-off do script em questão
        
        Segue a estrututura da pagina em si, com as classe determinada na instancia CSS do Style

    -->
<!-- Cadastro equipamento -->
<div class='row grid-responsive'>
<div class='column'>
<div class='card'>
<div class='car-title'>
<h3> Cadastrar Novo Equipamento </h3>
</div>
<div class='card-block'>
<form name='form' action='/postos/gazeta-vix/arace/equipamentos/' method='POST'>
<fieldset>
<label for='nameField'>Nome</label>
<input type='text' name='nome' placeholder='Digite o nome do novo Equipamento' id='nameField'>
<label for='ageRangeFirld'>Sufixo</label>
<select id='ageRangeFirld' name='sufixo'>
<option value='TX'>TX</option>
<option value='SW'>SW</option>
<option value='RX'>RX</option>
<option value='SU'>SU</option>
<option value='NB'>NB</option>
<option value='LK'>LK</option>
</select>
<label for='FirmwareField'>Versão de Firmware</label>
<input type='text' placeholder='Digite a versão de Firmware' name='firmware' id='FirmwareField'>
<label for='NumeroSerieFiel'>Numero de Serie</label>
<input type='text' placeholder='Digite o numero de serie do equipamento' name='numeroserie' id='NumeroSerieField'>
<label for='patrimonioField'>Numero de Patrimonio</label>
<input type='text' placeholder='Digite o numero do patrímonio' name='patrimonio' id='patrimonioField'> 
<label for='nameFirld'>Enviar Manual</label>
<div class='card'>
<input type='file' name='arquivo'>
<input type='hidden' name='env'>
<p></p>
<input type='hidden' name='MAX_FILE_SIZE' value='3000000'>
<input type='submit' name='env' value='Enviar'/>
</form>

<?php
$nome = @$_POST['nome'];
$sufixo = @$_POST['sufixo'];
$firmware = @$_POST['firmware'];
$serie = @$_POST['numeroserie'];
$patrimonio = @$_POST['patrimonio'];
$conexao = new mysqli('localhost', 'Administrador', 'G@zeta1234', 'database');
if(mysqli_connect_errno()){
echo '<h3>Não foi possivel conectar ao servidor de Banco de Dados</h3>';
}
//if(isset($_POST['submit']{
if(isset($_POST['env'])&& $_POST['env']=='Enviar'){
    //echo $nome;
	//echo $sufixo;
	//echo $firmware;
	//echo $serie;
	//echo $patrimonio;
    $sql = "INSERT INTO Equipamentos (Nome, Sufixo, Firmware, NumeroSerie, Patrimonio) VALUES ";
    $sql.= "('$nome', '$sufixo', '$firmware', '$serie', '$patrimonio')";
    mysqli_query($conexao, $sql) or die("<div id='mensagemERROR'> <div class='row grid-responsive'>
				<div class='column'>
					<div class='alert background-danger'><em class='fa fa-times-circle'></em> Ops, não foi possivel enviar os dados do novo equipamento</div>
				</div>
			</div>
			</div>");
	
	echo "<div id='mensagemEnvioOK'>";
	echo "<div class='row frid-responsive'>";
	echo "<div class='column' id='mensagemEnvio1'>";
	echo "<div class='alert background-success' id='mensagemEnvio2'><em class='fa fa-thumbs-up' ></em> Equipamento cadastrado com Sucesso </div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
}
	// Pasta onde o arquivo vai ser salvo
    $diretorio='../manuais/';
   
    // Definindo o tipos de arquivos permitidos
    $tipos[0]='.doc';                                                       
    $tipos[1]='.pdf';
    $tipos[2]='xdocs';
    $tipos[3]='docm';
    $tipos[4]='dotx';
    $tipos[5]='xls';
    
	if (!isset($_POST['env'])){
			$name=@$_FILES['arquivo']['name'];
			$temp_name=@$_FILES['arquivo']['tmp_name'];
			if(isset($name)){
				if(!empty($name)){
				if (move_uploaded_file($temp_name, $diretorio . $name)){
				echo "<div id='mensagemEnvioUploadOK'>";
				echo "<div class='row frid-responsive'>";
				echo "<div class='column'>";
				echo "<div class='alert background-success'><em class='fa fa-thumbs-up' ></em> Upload do manual realizado com sucesso </div>";
				echo "</div>";
				echo "</div>";
				echo "</div>";
				}
				}
			}	
			else {
				echo "<div id='mensagemEnvioUploadError'>";
				echo "<div class='row frid-responsive'>";
				echo "<div class='column'>";
				echo "<div class='alert background-warning'><em class='fa fa-warning' ></em> Ops, Não foi possivel fazer o upload do Manual </div>";
				echo "</div>";
				echo "</div>";
				echo "</div>";		
			}
	}
$conexao->close();
?>
</div>
<p class="credit">Copyright - <a href="http://aragones.esy.es/rid-pro/">A Gazeta Rádio e TV LTDA</a></p>
<script src='/js/chart.min.js'></script>
<script src='/js/chart-data.js'></script>
<script>
window.onload=function (){
    var chart1=document.getElementById('line-chart').getContext('2d');
    window.myLine=new Chart(chart1).Line(lineChartData,{
        responsive:true;
        scaleLineColor: 'rgba(0,0,0,.2)',
        scaleGridLineColor: 'rgba(0,0,0,.5)',
        scaleFontColor:'#c5c7cc'
    });
    var chart2=document.getElementById('bar-chart').getContext('2d');
    window.myBar=new Chart(chart2).Bar(barChartData,{
        responsive:true;
        scaleLineColor:'rgba(0,0,0,.2)',
        scaleGridLineColor:'rgba(0,0,0,.05)',
        scaleFontColor: '#c5c7cc'
    })
    var chart4=document.getElementById('pie-chart').getContext('2d');
    window.myPie=new Chart(chart4).Pie(pieData, {
        responsive: true,
        segmentShowStroke: false
    })
    var chart5=document.getElementById('tadar-chart').getContext('2d');
    window.myRadarChart=new Chart(chart5).Radar(radarData,{
        responsive: true,
        scaleLineColor:'rgba(0,0,0,05)',
        angleLineColor:'rgba(0,0,0,.2)'
    })
    var chart6=document.getElementById('polar-area-chart').getContext('2');
    windows.myPolarAreaChart=new Chart(chart6).PolarArea(polarData,{
        responsive: true;
        scaleLineColor:'rgba(0,0,0,.2)',
        segmentShowstroke: false;
    })

}
</script>
</body>
</html>

