<?php
//Inclui o arquivo de verificação
include_once("verifica_loja.php");

session_start();
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
</body>
</html>