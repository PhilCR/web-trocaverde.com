<?php
//Inclui o arquivo de verificação
include_once("verifica_loja.php");

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
			
            <div id="login" class="login_loj">
				<p align="right">Olá <?php echo $_SESSION['razao_social']; ?>
				<input align="right" class="abutton" type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'"/></p>
            </div>
			
        </div>
        
        <div align="center" id="content" class="content">
			<div class="mainofferbox" align="left"><form action="iniciar_venda.php" name="form_vender" method="post">
				<table>
				<tr><td><img src="img/imagem.png" class=""></td>
				<td>
					<p>Oferta 1</p>
					<p>Cantina</p>
					<input type="hidden" name="txt_cod" value="0"/>
					<input type="hidden" name="txt_valor" value="0"/>
					<p>descrição haiuhsasuidhasd sbduasbdui ad aisd asd asd asda dasj dasjk das dasm dam,s dasm,d am,sd sm
					sdmamjsaiofb dfgddsajsna sndsjadnas iodsaiosd ns erewqwiwdqwdqwe we qwr qwe ewfw wefwe fewf ewf ewf nd
					wdqwdwa qwe qedqw dw dq dqwq d wdqwdqwdqw d wqdqwd qqdqdqwdqwdqwdqwdqwdqwdqwdqwdwqedwed dwed wedqs</p>
					<table width="100%">
						<tr><td>Quantidade: 0</td><td>Vendidos: 0</td></tr>
						<tr><td>Valor: 0 trocados</td>
							<td align="right"><input class="abutton" type="submit" name="btn_vender" value="Vender"/></td></tr>
					</table>
				</td></tr>
				</table>
			</form></div>
			<div class="mainofferbox" align="left"><form action="iniciar_venda.php" name="form_vender" method="post">
				<table>
				<tr><td><img src="img/coxinha.jpeg" class=""></td>
				<td>
					<p>Coxinha 30% off</p>
					<p>Cantina</p>
					<input type="hidden" name="txt_cod" value="2"/>
					<input type="hidden" name="txt_valor" value="200"/>
					<p>descrição haiuhsasuidhasd sbduasbdui ad aisd asd asd asda dasj dasjk das dasm dam,s dasm,d am,sd sm
					sdmamjsaiofb dfgddsajsna sndsjadnas iodsaiosd ns erewqwiwdqwdqwe we qwr qwe ewfw wefwe fewf ewf ewf nd
					wdqwdwa qwe qedqw dw dq dqwq d wdqwdqwdqw d wqdqwd qqdqdqwdqwdqwdqwdqwdqwdqwdqwdwqedwed dwed wedqs</p>
					<table width="100%">
						<tr><td>Quantidade: 1000</td><td>Vendidos: 0</td></tr>
						<tr><td>Valor: 200 trocados</td>
							<td align="right"><input class="abutton" type="submit" name="btn_vender" value="Vender"/></td></tr>
					</table>
				</td></tr>
				</table>
			</form></div>
			<div class="mainofferbox" align="left"><form action="iniciar_venda.php" name="form_vender" method="post">
				<table>
				<tr><td><img src="img/imagem.png" class=""></td>
				<td>
					<p>Oferta 3</p>
					<p>Cantina</p>
					<input type="hidden" name="txt_cod" value="0"/>
					<input type="hidden" name="txt_valor" value="0"/>
					<p>descrição haiuhsasuidhasd sbduasbdui ad aisd asd asd asda dasj dasjk das dasm dam,s dasm,d am,sd sm
					sdmamjsaiofb dfgddsajsna sndsjadnas iodsaiosd ns erewqwiwdqwdqwe we qwr qwe ewfw wefwe fewf ewf ewf nd
					wdqwdwa qwe qedqw dw dq dqwq d wdqwdqwdqw d wqdqwd qqdqdqwdqwdqwdqwdqwdqwdqwdqwdwqedwed dwed wedqs</p>
					<table width="100%">
						<tr><td>Quantidade: 0</td><td>Vendidos: 0</td></tr>
						<tr><td>Valor: 0 trocados</td>
							<td align="right"><input class="abutton" type="submit" name="btn_vender" value="Vender"/></td></tr>
					</table>
				</td></tr>
				</table>
			</form></div>
        </div>
        
        
        <div id="footer" class="footer">
            copyright 2012
        </div>
    </body>
    
</html>
