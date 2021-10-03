<?php
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
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
		<title>| Pagina de Login |</title>

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
  <body>
<center>	
<div class="container">
<form method="post" action="index.php" name="loginform">
<p></p>
        <h1 class="form-signin-heading">Área Restrita</h1>
    <input id="login_input_username" class="login_input" type="text" placeholder="Usuário" name="user_name" required />
    <input id="login_input_password" class="login_input" type="password" placeholder="Senha" name="user_password" autocomplete="off" required />
<p></p>
<a href="registrar.php">Registrar uma nova conta</a>
<p></p>
<a href="/postos/gazeta-vix/arace/">Voltar para pagina de Login</a>
<p></p>
    <input type="submit"  name="login" value="Log in" />

</form>


</div>
</center>
<p class="credit">Copyright - <a href="http://aragones.esy.es/rid-pro/">A Gazeta Rádio e Tv LTDA</a></p>
  </body>
  </html>