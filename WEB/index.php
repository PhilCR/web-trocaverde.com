<!DOCTYPE HTML PUBLIC �-//W3C//DTD HTML 4.01 Transitional//EN�>

<html>
    <head>
        <title>TrocaVerde.com - Seu lixo reciclado como desconto para voc�!</title>
        <meta name="description" content="Site de compras coletivas utilizando pontos para obten��o de descontos." />
               
        
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" lang="pt-BR" >
        <link rel="stylesheet" type="text/css" href="Styles.css"/>
        
        <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0" />
        
    </head>
    <body>
        <div id="header" class="header">
            <a href="index.php"><img src="img/logo.png" class="logobox"></a>
            <div class="locationbox">
                <table>
                    <tr>
                        <td>
                            <font style="color:rgb(00,00,255)">Localiza��o Atual: </font>
                        </td>
                        <td width="25%">
                            <font><select id="regionlocation" name="regiao"><option value="none">Regi�o</option></select>
                        </td>
                        
                        <td width="25%">
                            <select id="levlocation" name="lev"><option value="none">L.E.V.</option></select></font>
                        </td>
                    </tr>
                    
                    </table>
                </div>
                        
               
            <div class="titlebox">
                <p><font class="he1">TrocaVerde<font class="he2">.com</font></font></p>
				<p><font class="he3">Seu lixo reciclado como desconto para voc�!</font></p>
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
        
        <div id="content" class="content">
            <?php include("ofertas.php") ?>
        </div>
        
        
        <div id="footer" class="footer">
            copyright 2012
        </div>
    </body>
    
</html>
