<?php
//Inclui o arquivo de verificação
include_once("verifica_admin.php");

session_start();
?>

<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01 Transitional//EN”>

<html>

<head>
	<title>Cadastro</title>
	
	<script type="text/javascript">
		function mostrar(qual) {
			obj_p = document.getElementById('div_p');
			obj_a = document.getElementById('div_a');
			obj_q = document.getElementById(qual);
		
			obj_p.style.display="none";
			obj_a.style.display="none";
			
			obj_q.style.display="";
		}
	</script>
</head>
 
<body>
	<p>Olá <b> <?php echo $_SESSION['nome']; ?> </b>
	<input type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'"/></p>

	<p>
		<input type="button" name="btn_pontuador" value="Cadastro de Pontuador" onclick="mostrar('div_p')"/>
		<input type="button" name="btn_admin" value="Cadastro de Administrador" onclick="mostrar('div_a')"/>
	</p>
	
	<div id="div_p" style="display:none;"><form action="enviar_cadastro_pontuador.php" name="form_cadastro_pontuador" method="post">
		<p>Cadastro de Pontuador</p>
		<p>Nome:<input type="text" name="txt_nome" size="50" maxlength="200"/></p>
		<p>Sobrenome:<input type="text" name="txt_snome" size="50" maxlength="50"/></p>
		<p>E-mail:<input type="text" name="txt_email" size="50" maxlength="70"/></p>
		<p>Senha:<input type="password" name="txt_senha" size="50" maxlength="16"/></p>
		<p>Repita a senha:<input type="password" name="txt_re_senha" size="50" maxlength="16"/></p>
		<p>Telefone:<input type="text" name="txt_tel" size="50" maxlength="11"/></p>
		<p><input type="submit" name="btn_cadastrar" value="Cadastrar"/></p>
	</form></div>

	<div id="div_a" style="display:none;"><form action="enviar_cadastro_admin.php" name="form_cadastro_admin" method="post">
		<p>Cadastro de Administrador</p>
		<p>Nome:<input type="text" name="txt_nome" size="50" maxlength="200"/></p>
		<p>Sobrenome:<input type="text" name="txt_snome" size="50" maxlength="50"/></p>
		<p>E-mail:<input type="text" name="txt_email" size="50" maxlength="70"/></p>
		<p>Senha:<input type="password" name="txt_senha" size="50" maxlength="16"/></p>
		<p>Repita a senha:<input type="password" name="txt_re_senha" size="50" maxlength="16"/></p>
		<p>Telefone:<input type="text" name="txt_tel" size="50" maxlength="11"/></p>
		<p><input type="submit" name="btn_cadastrar" value="Cadastrar"/></p>
	</form></div>
</body>
</html>