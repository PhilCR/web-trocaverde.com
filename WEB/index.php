<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Troca Verde</title>
</head>
 
<body>
	<form action="autenticar.php" name="form_login" method="post">
		<p>E-mail:<input type="text" name="txt_email" size="50" maxlength="70"/></p>
		<p>Senha:<input type="password" name="txt_senha" size="50" maxlength="16"/></p>
		<p><input type="submit" name="btn_entrar" value="Entrar"/>
		<input type="button" name="btn_cadastro" value="Novo" onclick="location.href='cadastro.php'"></p>
	</form>
</body>
</html>