
<!--
Author: Marcos Silva

Author URL: "http://aragones.esy.es/rid-pro/""
Date: 01/01/2018
Licence: "Creative Commons Attribution 2.0 Unported"
Licence URL: "https://creativecommons.org/licenses/by/2.0/br/
-->

<!-- Posto de gsre criado em -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="Content-Type" content='text/html'>
        <meta name='description' content='Pagina de Consulta gsre
        Aracê'>
        <meta name='keyword' content='system, rid-pro, monitoramento, consulta,gsre, posto, pagina, api'>
        <meta name='generator' content='RID PRO API by Marcos Silva'>
		<script type='text/javascript' src='/js/mapaload1/mapaload1.js'></script>
		<script type='text/javascript' src='/js/mapaload1/OpenLayers.js'></script>
		<script type='text/javascript' src='/js/mapaload1/OpenStreetMap.js'></script>
    
        <title>| gsre |</title>

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
</head>
        <body> <!-- BGCOLOR='FFFFFF' TEXT='000000' LINK='0000FF' VLINK='0000FF' marginwidth=0 marginheight=0 leftmargin=0 topmargin=0>
             <table border=0 width=100% border=0 cellpadding=0 cellspacing=0>
                 <tr><td bgcolor=000000 width =100% height=3 colspan=2><img src='' border=0 width=1 height=3>
</td></tr> -->

<div class='navbar'>
                <div class='row'>
                <div class='column column-30 col-site-title'><img src='/imagens/redegazetaLogo.png' width='140' height='auto' class='site-title float-left'></a>
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

<li><a href='\postos\gazeta-vix'gsre> Início </a></li>
<li><a href='#'> Postos </a>

<ul>

<li><a href='\postos\gazeta-vix'> Gazeta Vix </a></li>
<li><a href='\postos\gazeta-norte'> Gazeta Norte </a></li>
<li><a href='\postos\gazeta-noroeste'> Gazeta Noroeste </a></li>
<li><a href='\postos\gazeta-sul'> Gazeta Sul </a></li>
</ul>

</li>
<li><a href='\servicos'> Serviços </a></li>
<li><a href='\docs'> Documentação </a></li>
<li><a href='mailto:transmissao-vix@gmail.com'> Contato </a></li>

</ul>
</nav>
</div>

<div class ='column column-30'>
    <!--Redirecionar para pagina de login -->

    <div class='user-section'><a href='#'>
        <img src='/imagens/meu_perfil.png' alt='profile photo' class='circle float-left profile-photo' width='50' height='auto'>
        <div class='username'>
            <h4>Olá</h4>
            <!-- Nome do usuario -->
            <p><?php 
            $sessao = '';
            $sessao == (@$_SESSION['user_name']);
            if ($sessao != ''){
            echo $sessao;
            echo '<h6><a href="index.php?logout">Sair</a></h6></p>';
            }
            else {
                echo 'Realizar o Login';
                echo '<h6><a href="/acesso">Login</a></h6></p>';
            }
             ?>
			
            <!-- Script Perl/Python -->

        <!--Menu suspenso para incluir dentro do CSS modificar estrutura navbar e criar uma navbarmenu -->

    </div>
</a>
</div>

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
        <a href='/postos/gazeta-vix/'><em class="fa fa-home"></em> Voltar</a></li>
		<p></p>
		<li><a href='/postos/gazeta-vix/gsre/manuais/'><em class="fa fa-book"></em>Manuais</a></li>
		<li><a href='/postos/gazeta-vix/gsre/equipamentos/'><em class="fa fa-list"></em>Lista de Equipamento </a></li>
		<li><a href='/postos/gazeta-vix/gsre/manutencao/'><em class="fa fa-wrench"></em>Manutenção</a></li>
        <li><a href='/postos/gazeta-vix/gsre/relatorio/'><em class="fa fa-file"></em>Relatório</a></li>	
</ul>
</div>
<section id='main-content' class='column column-offset-20'>
    <div class='row grid-responsive'>
        <div class='column page-heading'>
            <div class='large-card'>
                <!-- Tabela -->
<a class 'anchor' name='tables'></a>
<div class 'row grid-responsive'>
    <div class='column'>
        <div class='card'>
            <div class='card-title'>
            <div class='badge float-right'>Chamado EDP: erh</div>
			<div class='badge float-right'>gsre,  erh - ES, erh, Brasil</div>
                <!-- Titulo -->
                <h3>Posto de gsre</h3>
                <p></p>
                <h5>Mapa</h5>

<iframe width='850' height='500' frameborder='0,5' src='/mapas/mapas.html'> </iframe>
					
</div>

</tbody>
</table>
			<p class="credit">Copyright - <a href="http://aragones.esy.es/rid-pro/">A Gazeta Rádio e Tv Ltda</a></p>
		</section>
	</div>

<script src='/js/chart.min.js'></script>
<script src='/js/chart-data.js'></script>
<script>
	window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
		var chart2 = document.getElementById("bar-chart").getContext("2d");
		window.myBar = new Chart(chart2).Bar(barChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
		var chart4 = document.getElementById("pie-chart").getContext("2d");
		window.myPie = new Chart(chart4).Pie(pieData, {
		responsive: true,
		segmentShowStroke: false
		});
		var chart5 = document.getElementById("radar-chart").getContext("2d");
		window.myRadarChart = new Chart(chart5).Radar(radarData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.05)",
		angleLineColor: "rgba(0,0,0,.2)"
		});
		var chart6 = document.getElementById("polar-area-chart").getContext("2d");
		window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		segmentShowStroke: false
		});
	};
	</script>
	</body>
	</html>

