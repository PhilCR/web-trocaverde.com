<?php
//Inclui o arquivo de verifica��o
include_once("verifica_usuario.php");

session_start();
?>

<!DOCTYPE HTML PUBLIC �-//W3C//DTD HTML 4.01 Transitional//EN�>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Usu�rio</title>
</head>
 
<body>
	<p>Ol� <b> <?php echo $_SESSION['nome']; ?> </b>
	<input type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'"/></p>
	<p>Seus pontos: <?php echo $_SESSION['pontos']; ?></p>
</body>
</html>