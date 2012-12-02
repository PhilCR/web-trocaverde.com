<?php
//Inclui o arquivo de verificação
include_once("verifica_admin.php");

session_start();
?>

<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01 Transitional//EN”>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Administrador</title>
</head>
 
<body>
	<p>Olá <b> <?php echo $_SESSION['nome']; ?> </b>
	<input type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'"/></p>
	
	<p><input type="button" name="btn_cadastro" value="Cadastro" onclick="location.href='admin_cadastro.php'"/>
	<input type="button" name="btn_liberar_loja" value="Liberar Loja" onclick="location.href='???.php'"/>
	<input type="button" name="btn_liberar_ofertas" value="Liberar Ofertas" onclick="location.href='???.php'"/>
	<input type="button" name="btn_excluir" value="Excluir" onclick="location.href='???.php'"/></p>
</body>
</html>