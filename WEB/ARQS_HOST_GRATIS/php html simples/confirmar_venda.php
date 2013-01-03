<?php
//Inclui o arquivo de verificação
include_once("verifica_loja.php");

session_start();

//receber dados
$cpf = $_POST["txt_cpf"];
$cod = $_POST["txt_cod"];
$valor = $_POST["txt_valor"];
$qtde = $_POST["txt_qtde"];

//calculando total
$total = $valor * $qtde;

//conectando ao banco de dados
$conn = mysql_connect("localhost", "loja", "012_proj") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("trocaverde", $conn);
}

//criando comando sql
$sql = "CALL dados_cliente_por_cpf('$cpf');";

//executando comando
$rs = mysql_query($sql, $conn);

//verifica o numero de linhas do resultado
$num = mysql_num_rows($rs);
?>

<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01 Transitional//EN”>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Loja</title>
</head>
 
<body>
	<p>Olá <b> <?php echo $_SESSION['razao_social']; ?> </b>
	<input type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'"/></p>
	
<?php
if($num == 0) {
	mysql_close($conn);
?>

	<p>Cliente não encontrado
	<input type="button" name="btn_voltar" value="Voltar" onclick="location.href='loja_index.php'"/></p>
	
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

	<p>Cliente não tem pontos o suficiente
	<input type="button" name="btn_voltar" value="Voltar" onclick="location.href='loja_index.php'"/></p>

<?php
	} else {
?>	

	<form action="verder.php" name="form_vender" method="post">
		<input type="hidden" name="txt_cpf" value="<?php echo $cpf ?>"/>
		<input type="hidden" name="txt_cod" value="<?php echo $cod ?>"/>
		<input type="hidden" name="txt_qtde" value="<?php echo $qtde ?>"/>
		<p>Nome: <?php echo $nome ?> <?php echo $snome ?></p>
		<p>Data de Nascimento: <?php echo $data ?></p>
		<p></p>
		<p>Oferta: Coxinha 30% off</p>
		<p>Quantidade: <?php echo $qtde ?></p>
		<p>Total: <?php echo $total ?></p>
		<p><input type="submit" name="btn_vender" value="Vender"/></p>
	</form>

<?php
	}
}
?>

</body>
</html>