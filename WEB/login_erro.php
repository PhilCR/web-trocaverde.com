<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01 Transitional//EN”>

<html>
    <head>
        <title>TrocaVerde.com - Seu lixo reciclado como desconto para você!</title>
        <meta name="description" content="Site de compras coletivas utilizando pontos para obtenção de descontos." />
               
        
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" lang="pt-BR" >
        <link rel="stylesheet" type="text/css" href="Styles.css"/>
        
        <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0" />
        
    </head>
    <body>
        <div id="header" class="header">
            <a href="index.php"><img src="img/logo.png" class="logobox"></a>                        
               
            <div class="titlebox">
                <p><font class="he1">TrocaVerde<font class="he2">.com</font></font></p>
				<p><font class="he3">Seu lixo reciclado como desconto para você!</font></p>
			</div>
			
        </div>
        
        <div align="center" id="content" class="content">
            <p>Email e/ou senha inválidos, tente novamente.</p>
			<form action="autenticar.php" name="form_login" method="post">
				<p>E-mail:<input type="text" name="txt_email" size="30" maxlength="70"/><br>
				Senha:<input type="password" name="txt_senha" size="30" maxlength="16"/></p>
				<p><input class="abutton" type="submit" name="btn_entrar" value="Entrar"/>
				<input class="abutton" type="button" name="btn_cadastro" value="Novo" onclick="location.href='cadastro.php'"></p>
			</form>
        </div>
        
        
        <div id="footer" class="footer">
            copyright 2012
        </div>
    </body>
    
</html>
