<?php
//Inclui o arquivo de verificação
include_once("verifica_pontuador.php");

session_start();

//receber dados
$cpf = $_POST["txt_cpf"];
$pontos = $_POST["txt_pontos"];
	
//conectando ao banco de dados
$conn = mysql_connect("localhost", "pontuador", "pr0j_2012") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("trocaverde", $conn);
}

//criando comando sql
$sql = "update cliente set pontos = pontos + '$pontos' where cpf = '$cpf';";
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
//executando comando
if(mysql_query($sql, $conn)) {
?>

	<p>Sucesso
	<input type="button" name="btn_voltar" value="Voltar" onclick="location.href='pontuador_index.php'"/></p>
	
<?php
} else {
?>

	<p>Erro (Executou uma operação ilegal XD)
	<input type="button" name="btn_voltar" value="Voltar" onclick="location.href='pontuador_index.php'"/></p>

<?php
}
?>

\</body>
</html>