<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Cadastro de Loja</title>
</head>
 
<body>
	<form action="enviar_cadastro_loja.php" name="form_cadastro" method="post">
		<p>Nome Fantasia:<input type="text" name="txt_nfantasia" size="50" maxlength="200"/></p>
		<p>Razão Social:<input type="text" name="txt_rsocial" size="50" maxlength="200"/></p>
		<p>E-mail:<input type="text" name="txt_email" size="50" maxlength="70"/></p>
		<p>Senha:<input type="password" name="txt_senha" size="50" maxlength="16"/></p>
		<p>Repita a senha:<input type="password" name="txt_re_senha" size="50" maxlength="16"/></p>
		<p>CNPJ:<input type="text" name="txt_cnpj" size="50" maxlength="14"/></p>
		<p>Inscrição Estadual:<input type="text" name="txt_inscest" size="50" maxlength="50"/></p>
		<p>Telefone:<input type="text" name="txt_tel" size="50" maxlength="11"/></p>
		<p>Endereço</p>
		<p>Rua:<input type="text" name="txt_end_rua" size="50" maxlength="200"/></p>
		<p>Número:<input type="text" name="txt_end_num" size="50" maxlength="6"/></p>
		<p>Complemento:<input type="text" name="txt_end_comp" size="50" maxlength="20"/></p>
		<p>Bairro:<input type="text" name="txt_end_bar" size="50" maxlength="30"/></p>
		<p>Cidade:<input type="text" name="txt_end_cid" size="50" maxlength="20"/></p>
		<p>Estado:<input type="text" name="txt_end_est" size="50" maxlength="2"/></p>
		<p>CEP:<input type="text" name="txt_end_cep" size="50" maxlength="10"/></p>
		<p><input type="submit" name="btn_cadastrar" value="Cadastrar"/></p>
	</form>
	</body>
</html>