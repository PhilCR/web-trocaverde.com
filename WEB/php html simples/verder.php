<?php
//Inclui o arquivo de verificação
include_once("verifica_loja.php");

session_start();

//receber dados
$cpf = $_POST["txt_cpf"];
$cod = $_POST["txt_cod"];
$qtde = $_POST["txt_qtde"];

//conectando ao banco de dados
$conn = mysql_connect("localhost", "loja", "012_proj") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("trocaverde", $conn);
}

//criando comando sql
$sql = "CALL compra('$cod','$qtde','$cpf');";
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
//executando comando
if(mysql_query($sql, $conn)) {
?>

	<p>Sucesso
	<input type="button" name="btn_voltar" value="Voltar" onclick="location.href='loja_index.php'"/></p>

<?php
} else {
?>

	<p>Erro (Executou uma operação ilegal XD)
	<input type="button" name="btn_voltar" value="Voltar" onclick="location.href='loja_index.php'"/></p>
	
<?php
}
?>

</body>
</html>