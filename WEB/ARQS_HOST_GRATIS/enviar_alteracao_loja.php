<?php
error_reporting(0);
//Inclui o arquivo de verifica��o
include_once("verifica_loja.php");

session_start();

$email1 = $_SESSION["email"];

//recebendo dados
$cnpj = $_POST['txt_cnpj'];
$rsocial = $_POST['txt_rsocial'];
$nfantasia = $_POST['txt_nfantasia'];	
$inscest = $_POST['txt_inscest'];
$tel = $_POST['txt_tel'];
$email2 = $_POST['txt_email'];
$end_rua = $_POST['txt_end_rua'];
$end_num = $_POST['txt_end_num'];
$end_comp = $_POST['txt_end_comp'];
$end_bar = $_POST['txt_end_bar'];
$end_cid = $_POST['txt_end_cid'];
$end_est = $_POST['txt_end_est'];
$end_cep = $_POST['txt_end_cep'];
$senha = $_POST['txt_senha'];
$regiao = $_POST['txt_regiao'];

//conectando ao banco de dados
$conn = mysql_connect("mysql.1freehosting.com", "u736022732_admin", "projet02012") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("u736022732_trocavrd", $conn);
}

//criando comando sql
$sql = "CALL atualiza_loja('$email1', '$cnpj', '$rsocial', '$nfantasia', '$inscest', '$tel', '$email2', '$end_rua', '$end_num', '$end_comp', 'end_bar', '$end_cid', '$end_est', '$end_cep', '$senha');";
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>TrocaVerde.com - Seu lixo reciclado como desconto para voc�!</title> 

        <!-- Metas descritivas -->
        <meta name="description" content="Site de compras coletivas utilizando pontos para obten��o de descontos." />
        <meta name="keywords" content="descontos, coletivo, compra, reciclagem, shopping" />

        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" lang="pt-BR" >

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">

        <!-- Habilitando a Responsive Design -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">

        <!-- Habilitar JQuery Script -->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.js"></script>

        <!-- Habilitar Scripts Pr�prios -->
        <script type="text/javascript" src="js/troca.js"></script>

    </head>

<body class="container">
	<!-- Cabe�alho [X] -->
	<div id="header" class="container-fluid" style=" background-color:#a0cca0; border:1px solid #000000; border-radius:3px;z-index: 999;">

		<div class="container-fluid">
		
			<!-- Logotipo [X] -->
			<div class="span3">
				<a href="index.php" ><img src="img/logo.png"></a>
			</div>                  
			
		</div>
    </div>

       
	<!-- Conteudo [X] -->
	<div id="content" align="center" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
<?php
//executando comando
if(mysql_query($sql, $conn)) {
?>
		<h3>Altera��o efetuada com sucesso.</h3><br>
		<input class="btn btn-large btn-info" type="button" name="btn_voltar" value="Sair" onclick="location.href='sair.php'"/>

<?php	
} else {
//echo mysql_errno($conn) . ": " . mysql_error($conn) . "\n";
?>
		<h3>Erro: altera��o n�o pode ser efetuada.</h3><br>
		<input class="btn btn-large btn-info" type="button" name="btn_voltar" value="Voltar" onclick="location.href='index.php'"/>

<?
}

//encerrar conex�o
mysql_close($conn);
?>

	</div>        

	<!-- Rodap� [X]-->
	<div id="footer" class="container-fluid btn-large btn-success btn-block" style="border:1px solid #000;">
		<div  class="span3">
			&copy; 2012 - All Rights Reserved.
		</div>
		<div class="span2 offset1">
			<a href="contato.php" title="Contate-nos" class="btn-success">Contate-nos</a>
		</div>

		<div class="span2">
			<a href="termos.php" title="Termos e Pol�ticas" class="btn-success">Termos e Pol�ticas</a>
		</div>

		<div class="span3">
			<a href="levs.php" title="Localiza��o dos L.E.V.s" class="btn-success">Localiza��o dos L.E.V.s</a>
		</div>

	</div>
</body>
    
</html> 