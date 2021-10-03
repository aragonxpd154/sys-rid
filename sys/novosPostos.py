#!/usr/bin/env python
#-*- coding: utf-8 -*-

# Incluindo codificação UTF-8
# Incluindo path do Python3

# API RID PRO
# __version__    = "0.1"
# __date__       = "26/07/2018"
# __author__     = "marcos.silvadeveloper@gmail.com"
# __license__    = "License GNU GPL 2.0"
# __version_py__ = "Python 3.6.5 Default"

# Importando as bibliotecas necessarias
from __future__ import print_function
from datetime import date, datetime, timedelta
from mysql.connector import errorcode
import mysql.connector
import webbrowser                               # Tratamento HTML 
import time
import base64
import sys
import os
import re
from unicodedata import normalize
import unicodedata
print('-----------------------------------------------------------------')
print('\nImportanto bibliotecas necessárias\n')
# Liberando o argumento de entrada e instaciando na variavel especifica
# Entrada de Nome
# Entrada do Endereço
# Entrada de Bairro
# Entrada de Cidade
# Entrada de CEP
# Entrada de Nº
# Entrada de Chamado EDP

# { Criar novo posto }

nomeArgv=sys.argv[1]
#print(nomeArgv)
enderecoArgv=sys.argv[2]
cepArgv=sys.argv[3]
bairroArgv=sys.argv[4]
cidadeArgv=sys.argv[5]
chamadaedpArgv=sys.argv[6]

''' 
Devolver cópia de uma str substituindo os caracteres
acentuados pelos seus equivalentes não acentuados.

Esse método reune o tratamento de uma variavel para
ser usado para criar o diretório de novos postos
evitando assim, os caracteres especiais e supresas na
interpolação de um a função onde necessite de string
declarada de forma não inter-simbolico

ATENÇÃO: Caracteres gráficos não ASCII e não alfa-numéricos
tais como bullets, travessões, aspas assimétricas, etc
simplesmente serão removida '''

# Repassando valores Unicode da strig nomeArgv repassada pelo argumento de entrada
# Variavel sem atribuição de caracteres especiais

      # Retornar ao valor atribuido de volta para a variavel tipo string
def remover_acentos_e_caracteres_especiais(palavra):
      # Unicode normalize transforma um caracter em seu equivalente em latin.
      nfkd = unicodedata.normalize('NFKD', palavra)
      palavraSemAcento = u"".join([c for c in nfkd if not unicodedata.combining(c)])
      # Usa expressão regular para retornar a palavra apenas com números, letras e espaço
      return re.sub('[^a-zA-Z0-9 \\\]', '', palavraSemAcento)
      #return normalize (nomeArgvUnicode).encode('ASCII', 'ignore').decode('ASCII')

# Atribuindo novamente ao valor retornado da 'remover_caracteres_especiais'
nomeArgvUnicode = remover_acentos_e_caracteres_especiais(nomeArgv)
print('-----------------------------------------------------------------')
print('\nRenomeando e removendo caracteres especiais para tratamento de exceção\n')
print (nomeArgvUnicode)

# Variavel nomeArgvUnicode corrigido index do argumento de entrada 
print('-----------------------------------------------------------------')
print('\nArmazenando os valores de entrada em variaveis globais orientado\n')
# Adicionando valor HIGH para ativar o Posto na listagem das paginas
print('-----------------------------------------------------------------')
print('\nDefinindo serviço como Ativo\n')
add_ativar = 1

# Adicionando tag do banco de dados 'equipamentos
# Adicionar o critério de block do case sensitive, tornando o nome tão somente
# em minuscula
print('-----------------------------------------------------------------')
print('\nRenomeando tabela com sufixo "po_" como po_xxx_equipamentos\n')
add_PO_xxx_equipamentos='po_' + nomeArgvUnicode + '_equipamentos'

# Adiconando tag do banco de dados 'manuais'
# Adicionar o critério de block do case sensitive, tornando o nome tão somente
# em minuscular

add_PO_xxx_manuais='po_' + nomeArgvUnicode + '_manuais'
print('-----------------------------------------------------------------')
print('\nRenomeando tabela com sufixo "po_" como po_ENTRADA...INPUT_manuais\n')
# Adicionando tag do banco de dados 'manutecoes'
# Adicionar o critério de block do case sensitive, tornando tão somente
# em minuscula

add_PO_xxx_manutencoes='po_' + nomeArgvUnicode + '_manutencoes'
print('-----------------------------------------------------------------')
print('\nRenomeando tabela com sufixo "po_" como po_xxx_manuatencoes\n')

# Disparando o fator1, fator2, fator3 como debugger
print('-----------------------------------------------------------------')
print('\nDisparando as tabelas e organizando listas\n')
print("--------------------------------------------------------------")
print("| Nome | Endereço | CEP | Bairro | Cidade | chamadoEdp | ID")
print("--------------------------------------------------------------")

# Lista de atribuições string 'manuais'
print("--------------------------------------------------------------")
print("          Lista de atribuições string 'manuais'             ")
print("--------------------------------------------------------------")

nomeAtr=str('nome')
print ('\n')
print (nomeAtr)
print ('\n')
tipoAtr=str('tipo')
print (tipoAtr)
print ('\n')
diretorioAtr=str('diretorio')
print (diretorioAtr)
print ('\n')

# Data de adesao do novo posto
print('-----------------------------------------------------------------')
print('\nConectando ao banco de dados MySQL/MariaDB\n')
# Iniciando conexão com o banco de dados MySQL/MariaDB
cnx = mysql.connector.connect(user='Administrador', password='G@zeta1234', database='gazeta-vix' )
cursor = cnx.cursor()

# Declarando a data de hoje
print('-----------------------------------------------------------------')
print('\nDeclarando a data atual\n')
data_massiva = datetime.now().date() + timedelta(days=0)

# Adicionando na lista de 'gv_postos' o nomeArgv[1] com a tag
print('-----------------------------------------------------------------')
print('\nMontando estrutura de envio TAG ao bando de dados MySQL/MariaDB\n')
add_gv_lista_posto = ("INSERT INTO gv_postos "
               "(nome, endereco, cep, bairro, cidade, chamadaEdp, dataAquisicao, ativo)"
               "VALUES (%(nome)s, %(endereco)s, %(cep)s, %(bairro)s, %(cidade)s, %(chamadaEdp)s, %(dataAquisicao)s, %(ativo)s)")
print('-----------------------------------------------------------------')
print('\nMontando dicionário limitado ao argumento de entrada\n')
# Dados do banco orientado ao argumento
data_gv_lista_posto = {
  'nome': nomeArgv,
  'endereco': enderecoArgv,
  'cep': cepArgv,
  'bairro': bairroArgv,
  'cidade': cidadeArgv,
  'chamadaEdp': chamadaedpArgv,
  'dataAquisicao': data_massiva,
  'ativo': add_ativar
}  
print('-----------------------------------------------------------------')
print('\nInserindo os dados de argumentos de entrada indexando documento\n')
# Inserindo dados do banco orientado pelo argumento acima
cursor.execute(add_gv_lista_posto, data_gv_lista_posto)
# Debugger no terminal
print('-----------------------------------------------------------------')
print('\nDados Enviado com sucesso para o servidor MySQL/MariaDB\n')

# Criando diretório
print('-----------------------------------------------------------------')
print('\nCriando diretório com base no argumento de entrada\n')

# Modificar Shell para introdução de chamado para as outras regionais
# Variavel nomeArgvUnicode global, tratamento em paralelo 
novoDir='/opt/lampp/htdocs/postos/gazeta-vix/'+ nomeArgvUnicode + ''
print (novoDir)
try:
  os.mkdir(novoDir)
  print('-----------------------------------------------------------------')
  print('\nDiretório criado com sucesso\n')
except OSError:
  os.rmdir(novoDir)
  print('-----------------------------------------------------------------')
  print('\nNão foi possivel criar um novo diretório é provavel que ja exista um em questão\n')
  os.mkdir(novoDir)

print('-----------------------------------------------------------------')
print('\nCriando diretório para o novo posto a ser adicionado\n')

# NameSpace de diretório sobre implemento de váriavel string armazenada
manuaisDirName='manuais'
equipamentosDirName='equipamentos'
relatorioDirName='relatorio'
cadastroDirName='cadastro'
manutencaoDirName='manutencao'

acaoManuaisDirName='acao'
acaoEquipamentosDirNome='acao'
osmDirNome='OSM_titles'
jsDirNome='js'
adminDirNome='admin'
classesDirNome='classes'
configuracaoDirNome='config'
librariesDirNome='libraries'
cadastroDirNome='cadastro'
acaoCadastrosDirNome='acao'
envioManuais='envio'

# Fim do NameSpace

# Inicio de associação de váriaveis
# Caso haja necessidade de incluir metadados em regionais, modifica a estrutura de diretório
manuaisDir='/opt/lampp/htdocs/postos/gazeta-vix/'+ nomeArgvUnicode+ '/' + manuaisDirName + ''
equipamentosDir='/opt/lampp/htdocs/postos/gazeta-vix/'+nomeArgvUnicode+ '/' + equipamentosDirName + ''
relatorioDir='/opt/lampp/htdocs/postos/gazeta-vix/' +nomeArgvUnicode+ '/' +relatorioDirName + ''
cadastrosDir='/opt/lampp/htdocs/postos/gazeta-vix/' +nomeArgvUnicode+ '/' + cadastroDirName + ''
manutencaoDir='/opt/lampp/htdocs/postos/gazeta-vix/' +nomeArgvUnicode+ '/' + manutencaoDirName + ''
acaoManuaisDir='/opt/lampp/htdocs/postos/gazeta-vix/' +nomeArgvUnicode+ '/manuais/' + acaoManuaisDirName + ''
acaoEquipamentosDir='/opt/lampp/htdocs/postos/gazeta-vix/' +nomeArgvUnicode+ '/equipamentos/' + acaoEquipamentosDirNome + ''


#OSMtiles='/opt/lampp/htcdocs/postos/gazeta-vix' +nomeArgvUnicode+ '/
# Finalizando a associação de variaiveis

# Iniciando a criação de novos diretórios associativos 
try:
  os.mkdir(manuaisDir)
  print('\nDiretório ' + manuaisDir + ' criado com sucesso')
  os.mkdir(equipamentosDir)
  print('\nDiretório ' + equipamentosDir + ' criado com sucesso')
  os.mkdir(relatorioDir)
  print('\nDiretório ' + relatorioDir + ' criado com sucesso')
  os.mkdir(cadastrosDir)
  print('\nDiretório ' + cadastrosDir + ' criado com sucesso')
  os.mkdir(manutencaoDir)
  print('\nDiretório ' + manutencaoDir + ' criado com suceso')
  os.mkdir(acaoManuaisDir)
  print('\nDiretório ' + acaoManuaisDir + ' criado com sucesso')
  os.mkdir(acaoEquipamentosDir)
  print('\nDiretório ' + acaoEquipamentosDir + ' criado com sucesso' )
  os.mkdir('\n')
except OSError:
  os.rmdir(manuaisDir)
  print('\nNão foi possivel criar um novo diretório é provavel que ja exista um em questão\n')
  os.rmdir(equipamentosDir)
  print('\nNão foi possivel criar um novo diretório é provavel que ja exista um em questão\n')
  os.rmdir(relatorioDir)
  print('\nnão foi possivel criar um novo diretório é provavel que ja exista um em questão\n')
  os.rmdir(cadastrosDir)
  print('\nNão foi possivel criar um novo diretório é provavel que ja exista um em questão\n')
  os.rmdir(manutencaoDir)
  print('\nNão foi possivel criar um novo diretório é provavel que ja exista um em questão\n')
  os.rmdir(acaoEquipamentosDir)
  print('\nNão foi possivel criar um novo diretório é provavel que ja exista uma em questão\n')
  os.rmdir(acaoEquipamentosDir)
  print('\nNão foi possivel criar um novo diretório é provavel que ja exista um em questão\n')

# Declarando o nome do banco de dados
# var=[gazeta-vix, gazeta-sul, gazeta-norte, gazeta-noroeste]
print('-----------------------------------------------------------------')
print('\nCriando tabela no banco de dados gazeta-vix\n')
DB_NAME='teste'

# Criando tabela no banco gazeta-vix com sufixo de tb = po = posto_xxxxNOMEDOPOSTOxxx_equipamento
TABLES={}
TABLES[("'"+add_PO_xxx_equipamentos+"'")]= (
    "CREATE TABLE ""`"+add_PO_xxx_equipamentos+"_` ("
    "`nome` text NOT NULL,"
    "`canal` int(11) NOT NULL,"
    "`firmware` text NOT NULL,"
    "`frequencia` text NOT NULL,"
    "`manual` text NOT NULL,"
    "`numeroSerie` text NOT NULL,"
    "`patrimonio` int(11) NOT NULL,"
    "`sufixo` text NOT NULL,"
    "`tipo` text NOT NULL,"
    "`id` int(11) NOT NULL,"
    "`posto` text NOT NULL,"
    "`ativo` int(11) NOT NULL"
    ") ENGINE=InnoDB DEFAULT CHARSET=ascii COMMENT='Tabela de equipamento do prefixo';"
    )
# Tabela do Posto+nomeArgv sys.argv[0] entrada Manual
TABLES[("'"+add_PO_xxx_manuais+"_'")]=(
    "CREATE TABLE ""`"+add_PO_xxx_manuais+"` ("
    "`ativo` int(11) NOT NULL,"
    "`nome` text NOT NULL,"
    "`tipo` text NOT NULL,"
    "`diretorio` text NOT NULL,"
    "`id` int(11) NOT NULL"
    ") ENGINE=InnoDB DEFAULT CHARSET=ascii;"
)
"""
#PARA CRIAR UMA NOVA TABELA USE AS SQL COMANDS ABAIXO COMO EXEMPLO
# Tabela do Posto+nomeArgv sys.argv[0] entrada Manual
TABLES[("'"+add_PO_xxx_manuais+"_'")]=(
    "CREATE TABLE ""`"+add_PO_xxx_manuais+"` ("
    "`ativo` int(11) NOT NULL,"
    "`nome` text NOT NULL,"
    "`tipo` text NOT NULL,"
    "`diretorio` text NOT NULL,"
    "`id` int(11) NOT NULL"
    ") ENGINE=InnoDB DEFAULT CHARSET=ascii;"
)
"""
def criando_database(cursor):
    try:
        cursor.execute(
            "CREATE DATABASE {} DEFAULT CHARACTER SET 'utf8'".format(DB_NAME))
    except mysql.connector.Error as err:
        print("Falha ao criar o banco de dados: {}".format(err))
        exit(1)

try:
    cnx.database = DB_NAME  
except mysql.connector.Error as err:
    if err.errno == errorcode.ER_BAD_DB_ERROR:
        criando_database(cursor)
        cnx.database = DB_NAME
    else:
        print(err)
        exit(1)

for name, ddl in TABLES.items():
    try:
        print("Criando tabela {}: ".format(name), end='')
        cursor.execute(ddl)
    except mysql.connector.Error as err:
        if err.errno == errorcode.ER_TABLE_EXISTS_ERROR:
            print("Já existe uam tabela criada.")
        else:
            print(err.msg)
    else:
        print("OK")

''' Distribuindo os arquivos nos respectivos nomes e associação da livrarias '''
#Abrindo diretorio 
arquivoDirPosto=open('/opt/lampp/htdocs/postos/gazeta-vix/'+ nomeArgvUnicode + '/index.php', 'w', encoding='utf8')
arquivoHTMLPosto=('''
<!--
Author: Marcos Silva\n
Author URL: "http://aragones.esy.es/rid-pro/""
Date: 01/01/2018
Licence: "Creative Commons Attribution 2.0 Unported"
Licence URL: "https://creativecommons.org/licenses/by/2.0/br/
-->

<!-- Posto de ''' + nomeArgv + ''' criado em '''  

'''-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="Content-Type" content='text/html'>
        <meta name='description' content='Pagina de Consulta ''' +nomeArgv+ '''
        Aracê'>
        <meta name='keyword' content='system, rid-pro, monitoramento, consulta,''' +nomeArgv+ ''', posto, pagina, api'>
        <meta name='generator' content='RID PRO API by Marcos Silva'>
		<script type='text/javascript' src='/js/mapaload1/mapaload1.js'></script>
		<script type='text/javascript' src='/js/mapaload1/OpenLayers.js'></script>
		<script type='text/javascript' src='/js/mapaload1/OpenStreetMap.js'></script>
    
        <title>| '''+nomeArgv+''' |</title>

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

<li><a href='\postos\gazeta-vix\''''+nomeArgvUnicode+'''> Início </a></li>
<li><a href='#'> Postos </a>

<ul>

<li><a href='\postos\gazeta-vix\'> Gazeta Vix </a></li>
<li><a href='\postos\gazeta-norte\'> Gazeta Norte </a></li>
<li><a href='\postos\gazeta-noroeste\'> Gazeta Noroeste </a></li>
<li><a href='\postos\gazeta-sul\'> Gazeta Sul </a></li>
</ul>

</li>
<li><a href='\servicos\'> Serviços </a></li>
<li><a href='\docs\'> Documentação </a></li>
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
		<li><a href='/postos/gazeta-vix/'''+nomeArgvUnicode+'''/manuais/'><em class="fa fa-book"></em>Manuais</a></li>
		<li><a href='/postos/gazeta-vix/'''+nomeArgvUnicode+'''/equipamentos/'><em class="fa fa-list"></em>Lista de Equipamento </a></li>
		<li><a href='/postos/gazeta-vix/'''+nomeArgvUnicode+'''/manutencao/'><em class="fa fa-wrench"></em>Manutenção</a></li>
        <li><a href='/postos/gazeta-vix/'''+nomeArgvUnicode+'''/relatorio/'><em class="fa fa-file"></em>Relatório</a></li>	
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
            <div class='badge float-right'>Chamado EDP: '''+chamadaedpArgv+'''</div>
			<div class='badge float-right'>'''+nomeArgv+''',  '''+cidadeArgv+''' - ES, '''+cepArgv+''', Brasil</div>
                <!-- Titulo -->
                <h3>Posto de '''+nomeArgv+'''</h3>
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

''')

arquivoDirPosto.write(arquivoHTMLPosto)
arquivoDirPosto.close()

#########################################################################
#                                                                       #
#                       ARQUIVO DE CONFIGURAÇÃO                         #    
#                                                                       #
#########################################################################

arquivoDirEquipamentos=open('/opt/lampp/htdocs/postos/gazeta-vix/'+nomeArgvUnicode +'/'+equipamentosDirName+'/index.php', 'w', encoding='utf8')
arquivoHTMLEquipamentos=('''
<?php 

?>

<!DOCTYPE html>
<!-- Author: Marcos Silva\n
Author URL: "http://aragones.esy.es/rid-pro/""
Date: 02/08/2018
Licence="Creative Commons Attribution 2.0 Unported"
Licence URL: "https://creativecommons.org/licenses/by/2.0/br/
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="Content-Type" content='text/html'>
        <meta name='description' content='Pagina de Consulta equipamentos '''+nomeArgv+''''>
        <meta name='keyword' content='system, rid-pro, monitoramento, consulta, '''+nomeArgv+''', posto, pagina, api'>
        <meta name='generator' content='RID PRO API By Marcos Silva'>
		<script type='text/javascript' src='/js/mapaload1/mapaload1.js'></script>
		<script type='text/javascript' src='/js/mapaload1/OpenLayers.js'></script>
		<script type='text/javascript' src='/js/mapaload1/OpenStreetMap.js'></script>
    
        <title>| Manuais de '''+nomeArgv+'''</title>

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
<li><a href='/postos/gazeta-vix/'''+nomeArgvUnicode+'''> Início </a></li>
<li><a href='#'> Postos </a>

<ul>

<li><a href='\postos\gazeta-vix\'> Gazeta Vix </a></li>
<li><a href='\postos\gazeta-norte\'> Gazeta Norte </a></li>
<li><a href='\postos\gazeta-noroeste\'> Gazeta Noroeste </a></li>
<li><a href='\postos\gazeta-sul\'> Gazeta Sul </a></li>
</ul>

</li>
<li><a href='\servicos\'> Serviços </a></li>
<li><a href='\docs\'> Documentação </a></li>
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
        <a href='/postos/gazeta-vix/'''+nomeArgvUnicode+'''/'><em class="fa fa-home"></em> Voltar</a></li>
		<p></p>
		<li><a href='/postos/gazeta-vix/'''+nomeArgvUnicode+'''/cadastro/'><em class="fa fa-edit"></em>Cadastrar Equipamento</a></li>
		<li><a href='#'><em class='fa fa-file'></em>Exportar Lista</a></li>	
</ul>
</div>
<section id='main-content' class='column column-offset-20'>
    <div class='row grid-responsive'>
        <div class='column page-heading'>
            <div class='large-card'>
<!-- Tabela -->
<a class='anchor' name='tables'></a>
<div class='row grid-responsive'>
    <div class='column'>
        <div class='card'>
            <div class='card-title'>
                <!-- Titulo -->
                <h3>Lista de equipamento cadastrados no posto de '''+nomeArgv+'''</h3>
</div>
<div class='card-block'>
    <table>
        <thead>
            <tr>
                <!-- Manter <thead> a parti  da linha 65 acima, no script Perl de Crammping -->
				
                <th>ID</th>
                <th>Nome</th>
                <th>Numero de Série</th>
                <th>Patrímonio</th>
                <th>Firmware</th>
                <th>Manual</th>
</tr>
</thead>
<tbody>
    <tr>
<html>
<head>
	<title>| Pagina Inicial |</title>

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
                    echo "
										}
			} else {
				echo "<tr><td colspan='5'><center>Não há registros no banco de dados</center></td></tr>";
			}
			?>
		</tbody>
	</table>
</div>

</body>
</html>
''')
arquivoDirEquipamentos.write(arquivoHTMLEquipamentos)
arquivoDirEquipamentos.close()

# Declarando o DB_NAME {Nome do banco de dados}
#DB_NAME='gv_posto'

# Criando a tabela 'manuais' sob o sufixo PO_xxx referente ao argumento
# de entrada do nomeArgv[2]
#add_tabela_manuais = ("CREATE TABLE `gazeta-vix`.`%s`"
#              "( `nome` TEXT NOT NULL , `tipo` TEXT NOT NULL , `diretorio` TEXT NOT NULL , `ativo` TEXT NOT NULL , `id` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`)) ENGINE = InnoDB;" % add_PO_xxx_manuais)

# Criando a tabela 'equimentos' sob o sufixo PO_xxx referente ao argumento
# de entrada do nomeArgv[1]
#add_tabela_equipamentos=("CREATE TABLE `gazeta-vix`.`%s`"
#              "( `nome` TEXT NOT NULL , `tipo` TEXT NOT NULL , `diretorio` TEXT NOT NULL , `ativo` TEXT NOT NULL , `id` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`)) ENGINE = InnoDB;" % add_PO_xxx_equipamentos)

# Adicionar mais alguma instancia de tabela 'manutencoes'


# Executando o SQL Command
#cursor.execute(add_gv_lista_posto, add_tabela_manuais, add_tabela_equipamentos)
#emp_no = cursor.lastrowid

# Fechando a requisição do MySQL/MariaDB

cnx.commit()
print('-----------------------------------------------------------------')
print('\nFechando requisiçãoa do cabeçalho do MySQL/MariaDB\n')

# Destruindo acesso via InjectSQL
print('-----------------------------------------------------------------')
print('\nDestruindo o acesso\n')
cursor.close()

print('-----------------------------------------------------------------')
print('\nFinalizando conexão e fechando Shell\n')
# Fechando conexão 
cnx.close()
                                   