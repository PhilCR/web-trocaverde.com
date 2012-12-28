<?php
//Inclui o arquivo de verificação
include_once("verifica_pontuador.php");

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
        
    </head>
    <body>
        <div id="header" class="header">
            <a href="index.php"><img src="img/logo.png" class="logobox"></a>                        
               
            <div class="titlebox">
                <p><font class="he1">TrocaVerde<font class="he2">.com</font></font></p>
				<p><font class="he3">Seu lixo reciclado como desconto para você!</font></p>
			</div>
			
            <div id="login" class="login_pont">
				<p align="right">Olá <?php echo $_SESSION['nome']; ?>
				<input align="right" class="abutton" type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'"/></p>
            </div>
			
        </div>
        
        <div align="center" id="content" class="content">
            <form action="pre_pontuar.php" name="form_pre_pontuar" method="post">
				<table>
					<tr><td>CPF:</td><td><input type="text" name="txt_cpf" size="50" maxlength="11"/></td></tr>
					<tr><td>Peso(gramas):</td><td><input type="text" name="txt_peso" size="50" maxlength="6"/></td></tr>
					<tr><td></td><td align="right"><input class="abutton" type="submit" name="btn_pontuar" value="Pontuar"/></td></tr>
				</table>
			</form>
        </div>
        
        
        <div id="footer" class="footer">
            copyright 2012
        </div>
    </body>
    
</html>
