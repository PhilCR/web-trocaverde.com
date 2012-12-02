<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Cadastro de Pontuador</title>
</head>
 
<body>
	<form action="enviar_cadastro_pontuador.php" name="form_cadastro" method="post">
		<p>Nome:<input type="text" name="txt_nome" size="50" maxlength="200"/></p>
		<p>Sobrenome:<input type="text" name="txt_snome" size="50" maxlength="50"/></p>
		<p>E-mail:<input type="text" name="txt_email" size="50" maxlength="70"/></p>
		<p>Senha:<input type="password" name="txt_senha" size="50" maxlength="16"/></p>
		<p>Repita a senha:<input type="password" name="txt_re_senha" size="50" maxlength="16"/></p>
		<p>Telefone:<input type="text" name="txt_tel" size="50" maxlength="11"/></p>
		<p><input type="submit" name="btn_cadastrar" value="Cadastrar"/></p>
	</form>
	</body>
</html>