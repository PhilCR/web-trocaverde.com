<?php
//Inclui o arquivo de verificação
include_once("verifica_loja.php");

session_start();
?>

<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01 Transitional//EN”>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Loja</title>
</head>
 
<body>
	<p>Olá <b> <?php echo $_SESSION['razao_social']; ?> </b>
	<input type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'"/></p>
	
	<div>
		<div><form action="iniciar_venda.php" name="form_vender" method="post">
			<p>Oferta 1</p>
			<input type="hidden" name="txt_cod" value="codigo"/>
			<p>descrição haiuhsasuidhasd sbduasbdui ad aisd asd asd asda dasj dasjk das dasm dam,s dasm,d am,sd sm
			sdmamjsaiofb dfgddsajsna sndsjadnas iodsaiosd ns erewqwiwdqwdqwe we qwr qwe ewfw wefwe fewf ewf ewf nd
			wdqwdwa qwe qedqw dw dq dqwq d wdqwdqwdqw d wqdqwd qqdqdqwdqwdqwdqwdqwdqwdqwdqwdwqedwed dwed wedqs</p>
			<p>Valor: 0 pontos</p>
			<p><input type="submit" name="btn_vender" value="Vender"/>
		</form></div>
		<div><form action="iniciar_venda.php" name="form_vender" method="post">
			<p>Coxinha 30% off</p>
			<input type="hidden" name="txt_cod" value="2"/>
			<input type="hidden" name="txt_valor" value="50"/>
			<p>descrição haiuhsasuidhasd sbduasbdui ad aisd asd asd asda dasj dasjk das dasm dam,s dasm,d am,sd sm
			sdmamjsaiofb dfgddsajsna sndsjadnas iodsaiosd ns erewqwiwdqwdqwe we qwr qwe ewfw wefwe fewf ewf ewf nd
			wdqwdwa qwe qedqw dw dq dqwq d wdqwdqwdqw d wqdqwd qqdqdqwdqwdqwdqwdqwdqwdqwdqwdwqedwed dwed wedqs</p>
			<p>Valor: 50 pontos</p>
			<p><input type="submit" name="btn_vender" value="Vender"/>
		</form></div>
		<div><form action="iniciar_venda.php" name="form_vender" method="post">
			<p>Oferta 3</p>
			<input type="hidden" name="txt_cod" value="codigo"/>
			<p>descrição haiuhsasuidhasd sbduasbdui ad aisd asd asd asda dasj dasjk das dasm dam,s dasm,d am,sd sm
			sdmamjsaiofb dfgddsajsna sndsjadnas iodsaiosd ns erewqwiwdqwdqwe we qwr qwe ewfw wefwe fewf ewf ewf nd
			wdqwdwa qwe qedqw dw dq dqwq d wdqwdqwdqw d wqdqwd qqdqdqwdqwdqwdqwdqwdqwdqwdqwdwqedwed dwed wedqs</p>
			<p>Valor: 0 pontos</p>
			<p><input type="submit" name="btn_vender" value="Vender"/>
		</form></div>
	</div>
</body>
</html>