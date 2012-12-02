<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01 Transitional//EN”>

<html>

<head>
	<title>Cadastro</title>
	
	<script type="text/javascript">
		function mostrar(qual) {
			obj_u = document.getElementById('div_u');
			obj_l = document.getElementById('div_l');
			obj_q = document.getElementById(qual);
		
			obj_u.style.display="none";
			obj_l.style.display="none";
			
			obj_q.style.display="";
		}
	</script>
</head>
 
<body>
	<p>
		<input type="button" name="btn_usuario" value="Cadastro de Usuário" onclick="mostrar('div_u')"/>
		<input type="button" name="btn_loja" value="Cadastro de Loja" onclick="mostrar('div_l')"/>
	</p>
	
	<div id="div_l" style="display:none;"><form action="enviar_cadastro_loja.php" name="form_cadastro_loja" method="post">
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
	</form></div>

	<div id="div_u" style="display:none;"><form action="enviar_cadastro_usuario.php" name="form_cadastro_usuario" method="post">
		<p>Nome:<input type="text" name="txt_nome" size="50" maxlength="200"/></p>
		<p>Sobrenome:<input type="text" name="txt_snome" size="50" maxlength="50"/></p>
		<p>E-mail:<input type="text" name="txt_email" size="50" maxlength="70"/></p>
		<p>Senha:<input type="password" name="txt_senha" size="50" maxlength="16"/></p>
		<p>Repita a senha:<input type="password" name="txt_re_senha" size="50" maxlength="16"/></p>
		<p>CPF:<input type="text" name="txt_cpf" size="50" maxlength="11"/></p>
		<p>Telefone:<input type="text" name="txt_tel" size="50" maxlength="11"/></p>
		<p>Celular:<input type="text" name="txt_cel" size="50" maxlength="11"/></p>
		<p>Data de nascimento:<input type="text" name="txt_nasc" size="50" maxlength="8"/></p>
		<p>Endereço</p>
		<p>Rua:<input type="text" name="txt_end_rua" size="50" maxlength="200"/></p>
		<p>Número:<input type="text" name="txt_end_num" size="50" maxlength="6"/></p>
		<p>Complemento:<input type="text" name="txt_end_comp" size="50" maxlength="20"/></p>
		<p>Bairro:<input type="text" name="txt_end_bar" size="50" maxlength="30"/></p>
		<p>Cidade:<input type="text" name="txt_end_cid" size="50" maxlength="50"/></p>
		<p>Estado:<input type="text" name="txt_end_est" size="50" maxlength="2"/></p>
		<p>CEP:<input type="text" name="txt_end_cep" size="50" maxlength="10"/></p>
		<p><input type="submit" name="btn_cadastrar" value="Cadastrar"/></p>
	</form></div>
</body>
</html>