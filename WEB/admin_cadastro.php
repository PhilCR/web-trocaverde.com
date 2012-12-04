<?php
//Inclui o arquivo de verificação
include_once("verifica_admin.php");

session_start();
?>

<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01 Transitional//EN”>

<html>
    <head>
        <title>TrocaVerde.com - Seu lixo reciclado como desconto para você!</title>
        <meta name="description" content="Site de compras coletivas utilizando pontos para obtenção de descontos." />
               
        
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" lang="pt-BR" >
        <link rel="stylesheet" type="text/css" href="Styles.css"/>
        
        <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0" />
		
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
        <div id="header" class="header">
            <a href="index.php"><img src="img/logo.png" class="logobox"></a>                        
               
            <div class="titlebox">
                <p><font class="he1">TrocaVerde<font class="he2">.com</font></font></p>
				<p><font class="he3">Seu lixo reciclado como desconto para você!</font></p>
			</div>
			
            <div id="login" class="login_adm">
				<p align="right">Olá <?php echo $_SESSION['nome']; ?>
				<input align="right" class="abutton" type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'"/></p>
            </div>
			
        </div>
        
        <div align="center" id="content" class="content">
			<p>
				<input class="bigbutton" type="button" name="btn_pontuador" value="Cadastro de Pontuador" onclick="mostrar('div_p')"/>
				<input class="bigbutton" type="button" name="btn_admin" value="Cadastro de Administrador" onclick="mostrar('div_a')"/>
			</p>
			
			<div id="div_p" style="display:none;"><form action="enviar_cadastro_pontuador.php" name="form_cadastro_pontuador" method="post">
				<p>Cadastro de Pontuador</p>
				<table>
					<tr><td>Nome:</td><td><input type="text" name="txt_nome" size="50" maxlength="200"/></td></tr>
					<tr><td>Sobrenome:</td><td><input type="text" name="txt_snome" size="50" maxlength="50"/></td></tr>
					<tr><td>E-mail:</td><td><input type="text" name="txt_email" size="50" maxlength="70"/></td></tr>
					<tr><td>Senha:</td><td><input type="password" name="txt_senha" size="50" maxlength="16"/></td></tr>
					<tr><td>Repita a senha:</td><td><input type="password" name="txt_re_senha" size="50" maxlength="16"/></td></tr>
					<tr><td>Telefone:</td><td><input type="text" name="txt_tel" size="50" maxlength="11"/></td></tr>
					<tr><td></td><td align="right"><input class="abutton" type="submit" name="btn_cadastrar" value="Cadastrar"/></td></tr>
				</table>
			</form></div>

			<div id="div_a" style="display:none;"><form action="enviar_cadastro_admin.php" name="form_cadastro_admin" method="post">
				<p>Cadastro de Administrador</p>
				<table>
					<tr><td>Nome:</td><td><input type="text" name="txt_nome" size="50" maxlength="200"/></td></tr>
					<tr><td>Sobrenome:</td><td><input type="text" name="txt_snome" size="50" maxlength="50"/></td></tr>
					<tr><td>E-mail:</td><td><input type="text" name="txt_email" size="50" maxlength="70"/></td></tr>
					<tr><td>Senha:</td><td><input type="password" name="txt_senha" size="50" maxlength="16"/></td></tr>
					<tr><td>Repita a senha:</td><td><input type="password" name="txt_re_senha" size="50" maxlength="16"/></td></tr>
					<tr><td>Telefone:</td><td><input type="text" name="txt_tel" size="50" maxlength="11"/></td></tr>
					<tr><td></td><td align="right"><input class="abutton" type="submit" name="btn_cadastrar" value="Cadastrar"/></td></tr>
				</table>
			</form></div>
        </div>
        
        
        <div id="footer" class="footer">
            copyright 2012
        </div>
    </body>
    
</html>