<?php
// Script de Validação do Usuario SSL conectado
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
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
		<title>| Pagina de registro |</title>

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
  <p></p>
<p></p>
<div class="container">
<form method="post" action="registrar.php" name="registerform">

<p></p>

        <h1 class="form-signin-heading">Criar uma nova conta</h1>
    
    <label for="login_input_username">Nome de Usuario</label>
    <input id="login_input_username" placeholder="(Somente letras e numeros, 2 to 64 caracteres)" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />

    
    <label for="login_input_email">Seu e-mail</label>
    <input id="login_input_email" class="login_input" type="email" name="user_email" required />

    <label for="login_input_password_new">Senha</label>
    <input id="login_input_password_new" placeholder='(minímo 6 caracteres)'class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

    <label for="login_input_password_repeat">Repete a Senha</label>
    <input id="login_input_password_repeat" placeholder='(minímo 6 caracteres)' class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
	<p></p>
    <input type="submit"  name="register" value="Registrar" />

</form>

<!-- Linha final -->
<a href="index.php">Voltar para pagina de Login</a>
</div>
<p class="credit">Copyright - <a href="http://aragones.esy.es/rid-pro/">A Gazeta Rádio e Tv Ltda</a></p>
</center>

</body>
</html>
