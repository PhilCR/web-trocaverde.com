<?php
//Inclui o arquivo de verificação
include_once("verifica_usuario.php");

session_start();
?>

<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01 Transitional//EN”>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Usuário</title>
</head>
 
<body>
	<p>Olá <b> <?php echo $_SESSION['nome']; ?> </b>
	<input type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'"/></p>
	<p>Seus pontos: <?php echo $_SESSION['pontos']; ?></p>
</body>
</html>