<?php

// Checando a versão do PHP.
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // Se voce estiver usando o PHP 5.3 ou PHP 5.4, você tem que incluir o password_api_compatibility_library.php
    // ( Essa biblioteca de addos do PHP7.0 possui a função de validação por hashing suportando novas versões do PHP)
    require_once("libraries/password_compatibility_library.php");
}

// Incluir a configuração/ constantes para a conexão com o Banco de Dados MySQL
require_once("config/db.php");

// Carregando o regritos de classes
require_once("classes/registrando.php");

// Criando o objeto de registro. Para possiveis criações de novos registros automaticamente
// Essa linha faz a inserçãpo dos registro do processo

$registration = new Registration();

// Visualizar ops registro e todas as mensagens de erro em 

include("admin/registrar.php");
