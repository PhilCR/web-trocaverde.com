<?php
//Inclui o arquivo de verificação
include_once("verifica_pontuador.php");

session_start();

//receber dados
$cpf = $_POST["txt_cpf"];
$peso = $_POST["txt_peso"];
	
//calcular pontos (ainda indefinida)
$pontos = $peso;
	
//conectando ao banco de dados
$conn = mysql_connect("localhost", "pontuador", "pr0j_2012") or die("Impossivel conectar");

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
	<title>Pontuador</title>
</head>
 
<body>
	<p>Olá <b> <?php echo $_SESSION['nome']; ?> </b>
	<input type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'"/></p>
	
<?php
if($num == 0) {
	mysql_close($conn);
?>

	<p>Cliente não encontrado
	<input type="button" name="btn_voltar" value="Voltar" onclick="location.href='pontuador_index.php'"/></p>
	
<?php
} else {
	$rst = mysql_fetch_array($rs);
	$nome = $rst["nome"];
	$snome = $rst["snome"];
	$data = $rst["data_nasc"];
	mysql_close($conn);
?>	

	<form action="pontuar.php" name="form_pontuar" method="post">
		<input type="hidden" name="txt_cpf" value="<?php echo $cpf ?>"/>
		<input type="hidden" name="txt_pontos" value="<?php echo $pontos ?>"/>
		<p>Nome: <?php echo $nome ?> <?php echo $snome ?></p>
		<p>Data de Nascimento: <?php echo $data ?></p>
		<p></p>
		<p>Pontos: <?php echo $pontos ?></p>
		<p><input type="submit" name="btn_pontuar" value="Confirmar Pontuação"/>
	</form>

<?php
}
?>

</body>
</html>