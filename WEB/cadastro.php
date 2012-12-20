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
        <div id="header" class="header">
            <a href="index.php"><img src="img/logo.png" class="logobox"></a>                       
               
            <div class="titlebox">
                <p><font class="he1">TrocaVerde<font class="he2">.com</font></font></p>
				<p><font class="he3">Seu lixo reciclado como desconto para você!</font></p>
			</div>
			
            <div id="login" class="login">
                <form action="autenticar.php" name="form_login" method="post">
					<p>E-mail:<input type="text" name="txt_email" size="30" maxlength="70"/><br>
					Senha:<input type="password" name="txt_senha" size="30" maxlength="16"/></p>
					<p align="right"><input class="abutton" type="submit" name="btn_entrar" value="Entrar"/>
					<input class="abutton" type="button" name="btn_cadastro" value="Novo" onclick="location.href='cadastro.php'"></p>
				</form>
            </div>
			
        </div>
        
        <div id="content" align="center" class="content">
            <p align=center>
				<input class="bigbutton" type="button" name="btn_usuario" value="Cadastro de Usuário" onclick="mostrar('div_u')"/>
				<input class="bigbutton" type="button" name="btn_loja" value="Cadastro de Loja" onclick="mostrar('div_l')"/>
			</p>
	
			<div id="div_l" style="display:none;"><form action="enviar_cadastro_loja.php" name="form_cadastro_loja" method="post">
				<table>
					<tr><td>Nome Fantasia:</td><td><input type="text" name="txt_nfantasia" size="50" maxlength="200"/></td></tr>
					<tr><td>Razão Social:</td><td><input type="text" name="txt_rsocial" size="50" maxlength="200"/></td></tr>
					<tr><td>E-mail:</td><td><input type="text" name="txt_email" size="50" maxlength="70"/></td></tr>
					<tr><td>Senha:</td><td><input type="password" name="txt_senha" size="50" maxlength="16"/></td></tr>
					<tr><td>Repita a senha:</td><td><input type="password" name="txt_re_senha" size="50" maxlength="16"/></td></tr>
					<tr><td>CNPJ:</td><td><input type="text" name="txt_cnpj" size="50" maxlength="14"/></td></tr>
					<tr><td>Inscrição Estadual:</td><td><input type="text" name="txt_inscest" size="50" maxlength="50"/></td></tr>
					<tr><td>Telefone:</td><td><input type="text" name="txt_tel" size="50" maxlength="11"/></td></tr>
					<tr><td>Endereço</td><td></td></tr>
					<tr><td>Rua:</td><td><input type="text" name="txt_end_rua" size="50" maxlength="200"/></td></tr>
					<tr><td>Número:</td><td><input type="text" name="txt_end_num" size="50" maxlength="6"/></td></tr>
					<tr><td>Complemento:</td><td><input type="text" name="txt_end_comp" size="50" maxlength="20"/></td></tr>
					<tr><td>Bairro:</td><td><input type="text" name="txt_end_bar" size="50" maxlength="30"/></td></tr>
					<tr><td>Cidade:</td><td><input type="text" name="txt_end_cid" size="50" maxlength="20"/></td></tr>
					<tr><td>Estado:</td><td><input type="text" name="txt_end_est" size="50" maxlength="2"/></td></tr>
					<tr><td>CEP:</td><td><input type="text" name="txt_end_cep" size="50" maxlength="10"/></td></tr>
					<tr><td></td><td><input class="abutton" type="submit" name="btn_cadastrar" value="Cadastrar"/></td></tr>
				</table>
			</form></div>

			<div id="div_u" style="display:none;"><form action="enviar_cadastro_usuario.php" name="form_cadastro_usuario" method="post">
				<table>
					<tr><td>Nome:</td><td><input type="text" name="txt_nome" size="50" maxlength="200"/></td></tr>
					<tr><td>Sobrenome:</td><td><input type="text" name="txt_snome" size="50" maxlength="50"/></td></tr>
					<tr><td>E-mail:</td><td><input type="text" name="txt_email" size="50" maxlength="70"/></td></tr>
					<tr><td>Senha:</td><td><input type="password" name="txt_senha" size="50" maxlength="16"/></td></tr>
					<tr><td>Repita a senha:</td><td><input type="password" name="txt_re_senha" size="50" maxlength="16"/></td></tr>
					<tr><td>CPF:</td><td><input type="text" name="txt_cpf" size="50" maxlength="11"/></td></tr>
					<tr><td>Telefone:</td><td><input type="text" name="txt_tel" size="50" maxlength="11"/></td></tr>
					<tr><td>Celular:</td><td><input type="text" name="txt_cel" size="50" maxlength="11"/></td></tr>
					<tr><td>Data de nascimento:</td><td><input type="text" name="txt_nasc" size="50" maxlength="10"/></td></tr>
					<tr><td>Endereço</td><td></td></tr>
					<tr><td>Rua:</td><td><input type="text" name="txt_end_rua" size="50" maxlength="200"/></td></tr>
					<tr><td>Número:</td><td><input type="text" name="txt_end_num" size="50" maxlength="6"/></td></tr>
					<tr><td>Complemento:</td><td><input type="text" name="txt_end_comp" size="50" maxlength="20"/></td></tr>
					<tr><td>Bairro:</td><td><input type="text" name="txt_end_bar" size="50" maxlength="30"/></td></tr>
					<tr><td>Cidade:</td><td><input type="text" name="txt_end_cid" size="50" maxlength="50"/></td></tr>
					<tr><td>Estado:</td><td><input type="text" name="txt_end_est" size="50" maxlength="2"/></td></tr>
					<tr><td>CEP:</td><td><input type="text" name="txt_end_cep" size="50" maxlength="10"/></td></tr>
					<tr><td></td><td><input class="abutton" type="submit" name="btn_cadastrar" value="Cadastrar"/></td></tr>
				<table>
			</form></div>
        </div>
        
        
        <div id="footer" class="footer">
            copyright 2012
        </div>
    </body>
    
</html>
