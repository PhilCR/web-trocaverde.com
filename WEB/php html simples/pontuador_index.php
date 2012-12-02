<?php
//Inclui o arquivo de verificação
include_once("verifica_pontuador.php");

session_start();
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
	
	<form action="pre_pontuar.php" name="form_pre_pontuar" method="post">
		<p>CPF:<input type="text" name="txt_cpf" size="50" maxlength="11"/></p>
		<p>Peso(gramas):<input type="text" name="txt_peso" size="50" maxlength="6"/></p>
		<p><input type="submit" name="btn_pontuar" value="Pontuar"/>
	</form>
</body>
</html>