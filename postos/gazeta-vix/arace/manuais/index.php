<?php require_once '/opt/lampp/htdocs/teste/acao/conexao.php'; ?>

<!DOCTYPE html>
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
    
        <title>| Aracê | Manuais</title>

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
</div>
<!-- Incluir o Jquery nesse limite -->


<div class='row'>
    <div id='sidebar' class='column'>
        <h5>Navegação</h5>
<ul>
    <li>
        <a href='\postos\gazeta-vix\arace\'><em class="fa fa-home"></em> Voltar</a></li>
		<p></p>
		<li><a href='\postos\gazeta-vix\arace\manuais\envio\'><em class='fa fa-envelope'></em>Enviar um Manual</a></li>
		<li><a href='\postos\gazeta-vix\arace\manuais\remover\'><em class='fa fa-remove'></em>Remover um manual</a></li>
		
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

<!-- Tabela -->
<a class='anchor' name='tables'></a>
<div class='row grid-responsive'>
    <div class='column'>
        <div class='card'>
            <div class='card-title'>
                <!-- Titulo -->
                <h3>Lista de manuais cadastrados</h3>
</div>
<div class='card-block'>
    <table>
        <thead>
            <tr>
                <!-- Manter <thead> a parti  da linha 65 acima, no script Perl de Crammping -->
				
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Diretório</th>
</tr>
</thead>
<tbody>
    <tr>


<html>
<head>
	<title>| Pagina Inicial</title>

</head>
<body>

		<?php
			$sql = "SELECT * FROM gv_manuais WHERE ativo = 1";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>".$row['id']."</td>
					<td>".$row['nome']."</td>
					<td>".$row['tipo']."</td>";
                    echo "<td>";
                    echo "<a href='".$row['diretorio']."'><button type='button'>Acessar</button></a>";
                    echo "</td>";
                    echo "
						<td>
							<a href='edit.php?id=".$row['id']."'><button type='button'>Editar</button></a><p></p>
							<a href='remove.php?id=".$row['id']."'><button type='button'>Remover</button></a><p></p>
						</td></tr>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>Não há registros</center></td></tr>";
			}
			?>
		</tbody>
	</table>
</div>

</body>
</html>