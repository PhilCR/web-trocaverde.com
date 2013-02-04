<?php
error_reporting(0);
//Inclui o arquivo de verifica��o
include_once("verifica_loja.php");

session_start();

//receber dados
$cpf = $_POST["txt_cpf"];
$cod = $_POST["txt_cod"];
$valor = $_POST["txt_valor"];
$qtde = $_POST["txt_qtde"];
$nome_oferta = $_POST["txt_nome_oferta"];

//calculando total
$total = $valor * $qtde;

//conectando ao banco de dados
$conn = mysql_connect("mysql.1freehosting.com", "u736022732_admin", "projet02012") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("u736022732_trocavrd", $conn);
}

//criando comando sql
$sql = "CALL dados_cliente_por_cpf('$cpf');";

//executando comando
$rs = mysql_query($sql, $conn);

//verifica o numero de linhas do resultado
$num = mysql_num_rows($rs);
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
			<!-- Formul�rio de Localiza��o de Ofertas [X] -->
			<div class="row btn-info" style="background-color:#ffd0a0; color:#ffd0a0; border:1px solid #004400; border-radius:1px;">
				<div class="span1">
					<a href="index.php" style="color:#ffffff;"><b>Home</b></a>
				</div>
				<div class="span2 offset1 hidden-desktop visible-tablet hidden-phone" align="center">

				</div>
				<div class="span2 offset2 visible-desktop hidden-tablet hidden-phone" align="center">

				</div>
				<div class="span2 hiden-desktop hiden-tablet visible-phone">

				</div>
				<div align="right" class="span4 offset1 visible-desktop hidden-tablet hidden-phone">
					Ol� <b> <?php echo $_SESSION['razao_social']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
				<div align="right" class="span4 offset1 hiden-desktop visible-tablet hiden-phone">
					Ol� <b> <?php echo $_SESSION['razao_social']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
				<div class="span2 hiden-desktop hiden-tablet visible-phone">
					Ol� <b> <?php echo $_SESSION['razao_social']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
            </div>

        </div>


		<div class="container-fluid">
		
			<!-- Logotipo [X] -->
			<div class="span4">
				<a href="index.php" ><img src="img/logo.png"></a>
			</div>                			
		</div>
    </div>
       
	<!-- Conteudo [X] -->
	<div id="content" align="center" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
		 		
<?php
if($num == 0) {
	mysql_close($conn);
?>

		<h3>Cliente n�o encontrado.</h3></br>
		<input class="btn btn-small btn-info" type="button" name="btn_voltar" value="Voltar" onclick="location.href='loja_index.php'"/>
	
<?php
} else {
	$rst = mysql_fetch_array($rs);
	$nome = $rst["nome"];
	$snome = $rst["snome"];
	$data = $rst["data_nasc"];
	$pontos = $rst["pontos"];
	mysql_close($conn);
	
	if($pontos < $total) {
?>

		<h3>Cliente n�o tem trocados o suficiente.</h3></br>
		<input class="btn btn-small btn-info" type="button" name="btn_voltar" value="Voltar" onclick="location.href='loja_index.php'"/>

<?php
	} else {
?>	
		<form action="verder.php" name="form_vender" method="post">
			<input type="hidden" name="txt_cpf" value="<?php echo $cpf ?>"/>
			<input type="hidden" name="txt_cod" value="<?php echo $cod ?>"/>
			<input type="hidden" name="txt_qtde" value="<?php echo $qtde ?>"/>
			<table>
				<tr><td><h4>Nome: <?php echo $nome ?> <?php echo $snome ?></h4></td><td></td></tr>
				<tr><td><h4>Data de Nascimento: <?php echo $data ?></h4></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td><h4>Oferta: <?php echo $nome_oferta; ?></h4></td><td></td></tr>
				<tr><td><h4>Quantidade: <?php echo $qtde ?></h4></td><td><h4>Total: <?php echo $total ?> trocados</h4></td></tr>
				<tr><td></td><td align="right"><input class="btn btn-small btn-info" type="submit" name="btn_vender" value="Vender"/></td></tr>
			</table>
		</form>	
<?php
	}
}
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