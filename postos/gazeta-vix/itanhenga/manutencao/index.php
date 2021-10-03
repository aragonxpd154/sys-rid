<!-- Author: Marcos Silva\n
Author URL: "http://aragones.esy.es/rid-pro/""
Date: 09/07/2018
Licence="Creative Commons Attribution 2.0 Unported"
Licence URL: "https://creativecommons.org/licenses/by/2.0/br/
-->

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="Content-Type" content='text/html'>
        <meta name='description' content='Pagina de Consulta Itanhenga'>
        <meta name='keyword' content='system, rid-pro, monitoramento, consulta, Itanhenga, posto, Itanhenga, pagina, api'>
        <meta name='generator' content='RID PRO API'>
        <script type='text/javascript' src='/js/mapaload1/mapaload1.js'></script>
        <script type='text/javascript' src='/js/mapaload1/OpenLayers.js'></script>
        <script type='text/javascript' src='/js/mapaload1/OpenStreetMap.js'></script>
        <script type="text/javascript" src="jquery_1.4_jquery.min.js"></script>
        <link rel='shortcut icon' type='image/png' href='/imagens/favicon.ico'>
        <title>| Itanhenga |</title>

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
        setTimeout('destruirDIV()', 12000);
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
        <a href='\postos\gazeta-vix\itanhenga\'><em class="fa fa-home"></em> Voltar</a></li>
        <p></p>
        <li><a href='\gazeta-vix\itanhenga\manuais\inserir\'><em class='fa fa-home'></em>Cadastro de Laudo de Inspeção</a></li>     
</ul>
</div>
<section id='main-content' class='column column-offset-20'>
    <div class='row grid-responsive'>
        <div class='column page-heading'>
            <div class='large-card'>
                
<form name='form' action='destino.php' method='GET'>
<!-- Cadastro equipamento -->
<div class='row grid-responsive'>
<div class='column'>
<div class='card'>
<div class='car-title'>
<h3> Laudo de Inspeção </h3>
</div>
<div class='card-block'>

<fieldset>
            <div class="row grid-responsive">
                <div class="column ">
                        <div class="card-block">
                            <table>
                                <thead>
                                    <tr>
    <h4> Grupo de Moto Gerador 1 </h4>
    </tr>
                                    <tr>
                                        <th>Inspeção Visual do Gerador GMG</th>
                                        <td>
                                            <select id='inspecao_1' name='inspecao_1' class="column column-30">
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select>
</div>
</td>                                    
</tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Verificação Nível de Água</th>
                                        <th><select id='inspecao_2' name='inspecao_2'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></th>

                                    </tr>
                                    <tr>
                                        <th>Verificação Conexão da Bateria</th>
                                        <td><select id='inspecao_3' name='inspecao_3'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
</tr>
<tr>
                                        <th>Verificação Conexão da Linha de Combustível</th>
                                        <td><select id='inspecao_4' name='inspecao_4'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                    </tr>
                                    <tr>
                                        <th>Verificação Nível de Combustível e Tanque</th>
                                        <td><select id='inspecao_5' name='inspecao_5'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                    </tr>
                                    <tr>
                                        <th>Limpeza da Maquina</th>
                                        <td><select id='inspecao_6' name='inspecao_6'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                    </tr>
                                    <tr>
                                        <th>Inspeção Visual do QTA</th>
                                        <td><select id='inspecao_7' name='inspecao_7'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                    </tr>

                                   </tr>
                                   <tr>
                                        <th><h4><p></p>Regulador de Tensão</h4></th>
                                        </tr>
                                    <tr>
                                        <th>Inspeção Visual da Maquina</th>
                                        <td>
                                            <select id='inspecao_8' name='inspecao_8' class="column column-30">
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select>
</div>
</td>                                    
</tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Verificação Temperatura e Ruído</th>
                                        <th><select id='inspecao_9' name='inspecao_9'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></th>

                                    </tr>
                                    <tr>
                                        <th>Inspeção Visual das Baterias</th>
                                        <td><select id='inspecao_10' name='inspecao_10'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
</tr>
<tr>
                                        <th>Limpeza da Maquina</th>
                                        <td><select id='inspecao_11' name='inspecao_11'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                    </tr>
                                    <tr>
                                        <th>Inspeção Visual QDG</th>
                                        <td><select id='inspecao_12' name='inspecao_12'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td></tr>
<tr>
                                        <th><h4><p></p>Ar Condicionado</h4></th>
                                        </tr>

                                    <tr>
                                        <th>Inspeção Visual da Maquina</th>
                                        <td><select id='inspecao_13' name='inspecao_13'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                    <tr>
                                        <th>Inspeção Visual QDG</th>
                                        <td><select id='inspecao_14' name='inspecao_14'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                    <tr>
                                        <th>Verificação de Temperatura e Ruído</th>
                                        <td><select id='inspecao_15' name='inspecao_15'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                    <tr>
                                        <th>Verificação de LOG, Eventos e Status</th>
                                        <td><select id='inspecao_16' name='inspecao_16'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                    <tr>
                                        <th>Verificação de Eficiência e Vazão</th>
                                        <td><select id='inspecao_17' name='inspecao_17'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                    <tr>
                                        <th>Inspeção da Serpentina e Filtro de Ar</th>
                                        <td><select id='inspecao_18' name='inspecao_18'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                    <tr>
                                        <th>Inspeção do Dreno</th>
                                        <td><select id='inspecao_19' name='inspecao_19'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td></tr>
<tr>
                                        <th><h4><p></p>Radios 1250kHz</h4></th>
                                        </tr>
                                    <tr>
                                        <th>Inspeção Visual dos Transmissores</th>
                                        <td><select id='inspecao_20' name='inspecao_20'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                   <th>Inspeção Visual das Conexões Elétrica</th>
                                        <td><select id='inspecao_21' name='inspecao_21'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td></tr>
<tr>
                                        <th>Inspeção Visual das Conexões RF</th>
                                        <td><select id='inspecao_22' name='inspecao_22'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                   <tr>
                                        <th>Verificação de Leituras dos Equipamentos</th>
                                        <td><select id='inspecao_23' name='inspecao_23'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>

<tr>
                                        <th>Verificação de Temperatura dos Equipamentos</th>
                                        <td><select id='inspecao_24' name='inspecao_24'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                   <tr>
                                        <th>Limpeza dos Equipamentos</th>
                                        <td><select id='inspecao_25' name='inspecao_25'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                   <tr>
                                        <th><h4><p></p>Radios 820kHz</h4></th>
                                        </tr>
                                    <tr>
                                        <th>Inspeção Visual dos Transmissores</th>
                                        <td><select id='inspecao_26' name='inspecao_26'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                   <th>Inspeção Visual das Conexões Elétrica</th>
                                        <td><select id='inspecao_27' name='inspecao_27'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td></tr>
<tr>
                                        <th>Inspeção Visual das Conexões RF</th>
                                        <td><select id='inspecao_28' name='inspecao_28'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                   <tr>
                                        <th>Verificação de Leituras dos Equipamentos</th>
                                        <td><select id='inspecao_29' name='inspecao_29'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>

<tr>
                                        <th>Verificação de Temperatura dos Equipamentos</th>
                                        <td><select id='inspecao_30' name='inspecao_30'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                   <tr>
                                        <th>Limpeza dos Equipamentos</th>
                                        <td><select id='inspecao_31' name='inspecao_31'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td></tr>
<tr>
                                        <th><h4><p></p>Links de Audio</h4></th>
                                        </tr>
                                    <tr>
                                        <th>Inspeção Visual dos Rádios</th>
                                        <td><select id='inspecao_32' name='inspecao_32'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                   <th>Inspeção Visual das Conexões Elétrica</th>
                                        <td><select id='inspecao_33' name='inspecao_33'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td></tr>
<tr>
                                        <th>Inspeção Visual das conexões RF</th>
                                        <td><select id='inspecao_34' name='inspecao_34'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                   <tr>
                                        <th>Verificação de Leituras dos Equipamentos</th>
                                        <td><select id='inspecao_35' name='inspecao_35'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>

<tr>
                                        <th>Verificação de Temperatura dos Equipamentos</th>
                                        <td><select id='inspecao_36' name='inspecao_36'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                   <tr>
                                        <th>Limpeza dos Equipamentos</th>
                                        <td><select id='inspecao_37' name='inspecao_37'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td></tr>
<tr>
                                        <th><h4><p></p>Habitação</h4></th>
                                        </tr>
                                    <tr>
                                        <th>Inspeção Visual do Pátio Jardim e Pomar</th>
                                        <td><select id='inspecao_38' name='inspecao_39'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                   <th>Verificação Caixa d' Agua</th>
                                        <td><select id='inspecao_39' name='inspecao_39'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td></tr>s
<tr>
                                        <th>Verificação da Iluminação Interna e Externa</th>
                                        <td><select id='inspecao_40' name='inspecao_40'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                   <tr>
                                        <th>Verificação Limpeza em Geral</th>
                                        <td><select id='inspecao_41' name='inspecao_41'>
<option value='OK!'>OK!</option>
<option value='PONTO DE ATENÇÃO'>PONTO DE ATENÇÃO</option>
</select></td>
                                   </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
  
    
<label for="commentField">Observação</label>
<textarea placeholder="OBSERVAÇÃO…" name="inspecao_42" id="inspecao_42"></textarea>
<p></p>
<label for="commentField">Equipe</label>
<textarea placeholder="Equipe que acompanhou..." name='inspecao_44' id="inspecao_44"></textarea>

<label for='nameFirld'>Gerar Relário e Enviar </label>
<input id='inspecao_43' name='inspecao_43' value='<?php echo date("d/m/Y"); ?>'>
<div class='card'>
    </fieldset>
    </form>
<p></p>
<input type='submit' name='env' value='Enviar'/>
</form>

</html>