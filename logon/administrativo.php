<?php
session_start();
include 'validar.php';
echo "Usuario: ". $_SESSION['usuarioNome'];		
?>
<br>

<a href="sair.php">Sair</a>