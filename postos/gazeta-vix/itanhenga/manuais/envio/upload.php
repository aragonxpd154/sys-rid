<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="Content-Type" content='text/html'>
        <meta name='description' content='Pagina de Consulta Itanhenga'>
        <meta name='keyword' content='system, rid-pro, monitoramento, consulta, Itanhenga, posto, Itanhenga, pagina, api, remover, manual'>
        <meta name='generator' content='RID PRO API'>
    <script type='text/javascript' src='/js/mapaload1/mapaload1.js'></script>
    <script type='text/javascript' src='/js/mapaload1/OpenLayers.js'></script>
    <script type='text/javascript' src='/js/mapaload1/OpenStreetMap.js'></script>
    
        <title>| Itanhenga | Remover o Manual? </title>

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

<li><a href='\postos\gazeta-vix\'> Início </a></li>
<li><a href='#'> Postos </a>

<ul>

<li><a href='\postos\gazeta-vix\'> Gazeta Vix </a></li>
<li><a href='\postos\gazeta-norte\'> Gazeta Norte </a></li>
<li><a href='\postos\gazeta-noroeste\'> Gazeta Noroeste </a></li>
<li><a href='\postos\gazeta-sul\'> Gazeta Sul </a></li>
</ul>

</li>
<li><a href='#'> Serviços </a></li>
<li><a href='#'> Documentação </a></li>
<li><a href='mailto:transmissao.drive@gmail.com'> Contato </a></li>


</ul>

</nav>


</div>



<div class ='column column-30'>
    <!--Redirecionar para pagina de login -->

    <div class='user-section'><a href='#'>
        <img src='/imagens/meu_perfil.png' alt='profile photo' class='circle float-left profile-photo' width='50' height='auto'>
        <div class='username'>
            <!-- Nome do usuario -->
               <h4>Olá</h4>
            <!-- Nome do usuario -->
            <p><?php echo $_SESSION['user_name'] ?></p>
            <h6><a href="index.php?logout">Sair</a></h6>
            <p></p>
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
        <a href='\postos\gazeta-vix\itanhenga\manuais\'><em class="fa fa-home"></em> Voltar</a></li>
    <p></p>

  
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
                <h3>Enviar um Manual</h3>
</div>

<?php

// Nome proposto pelo cliente para compor o nome do respectivo manual
$nomedoManual = @$_POST['nomeManual'];

// Respectivos arquivos via POST
$arquivo = @$_POST['arquivo'];

// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = '/opt/lampp/htdocs/manuais/';

// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb

// Array com as extensões permitidas
$_UP['extensoes'] = array('pdf', 'png', 'jpg', 'jpeg', 'doc', 'docx', 'pptx', 'ppt');

// Renomeia o arquivo? (Se true, o arquivo será salvo como .rid e um nome único)
$_UP['renomeia'] = false;

// Extensao para adicionar ao Banco de Dados


// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
  die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
  exit; // Para a execução do script
}

// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar

// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
  echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
  exit;
}

// Faz a verificação do tamanho do arquivo
if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
  echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
  exit;
}

// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta

// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
  // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .rid
  $nome_final = md5(time()).'.rid';
} else {
  // Mantém o nome original do arquivo
  $nome_final = $_FILES['arquivo']['name'];
}
  
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {

$posto=("itanhenga");
$ativo=(1);

$conexao = new mysqli('localhost', 'Administrador', 'G@zeta1234', 'gazeta-vix');

$diretorioFinal="/manuais/". $nome_final ."";

if(mysqli_connect_errno()){
echo '<h3>Não foi possivel conectar ao servidor de Banco de Dados</h3>';
}

    $sql = "INSERT INTO gv_manuais (nome, tipo, diretorio, posto, ativo) VALUES ";
    $sql .= "('$nomedoManual', '$extensao', '$diretorioFinal', '$posto', '$ativo')";
    

    mysqli_query($conexao, $sql) or die("<div id='mensagemERROR'>
        <div class='row grid-responsive'>
        <div class='column'>
          <div class='alert background-danger'><em class='fa fa-times-circle'></em> Ops, não foi possivel enviar o manual do novo equipamento...</div>
        </div>
      </div>
      </div>");
      
  echo "<div id='mensagemEnvioOK'>";
  echo "<div class='row frid-responsive'>";
  echo "<div class='column' id='mensagemEnvio1'>";
  echo "<div class='alert background-success' id='mensagemEnvio2'><em class='fa fa-thumbs-up' ></em> Manual enviado com Sucesso </div>";
  echo "</div>";
  echo "</div>";
  echo "</div>";

  echo "<div id='mensagemEnvioOK'>";
  echo "<div class='row frid-responsive'>";
  echo "<div class='column' id='mensagemEnvio1'>";
  echo "<div class='alert background-success' id='mensagemEnvio2'><em class='fa fa-thumbs-up' ></em> Upload Efetuado com Sucesso </div>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  

    

$conexao->close();

  // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
  echo '<a href="' . $diretorioFinal . '"> Clique aqui para acessar o arquivo</a>';
  //echo '<a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
  echo '<p></p>';
  echo 'Redirecionando para a pagina inicial em 5 segundos...';
  echo '<p></p>';
  echo '<a href="/postos/gazeta-vix/itanhenga/manuais/"><button type="button">Voltar</button></a>';
  


} else {
  // Não foi possível fazer o upload, provavelmente a pasta está incorreta
  echo "Não foi possível enviar o arquivo, tente novamente mais tarde...";
}


?> 
