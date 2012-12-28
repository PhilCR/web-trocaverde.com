<?php
//Inclui o arquivo de verificação
include_once("verifica_loja.php");

session_start();

$cod = $_POST["txt_cod"];
$valor = $_POST["txt_valor"];
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
	
	<div><form action="confirmar_venda.php" name="form_vender" method="post">
		<p>Coxinha 30% off</p>
		<input type="hidden" name="txt_cod" value="2"/>
		<input type="hidden" name="txt_valor" value="50"/>
		<p>descrição haiuhsasuidhasd sbduasbdui ad aisd asd asd asda dasj dasjk das dasm dam,s dasm,d am,sd sm
		sdmamjsaiofb dfgddsajsna sndsjadnas iodsaiosd ns erewqwiwdqwdqwe we qwr qwe ewfw wefwe fewf ewf ewf nd
		wdqwdwa qwe qedqw dw dq dqwq d wdqwdqwdqw d wqdqwd qqdqdqwdqwdqwdqwdqwdqwdqwdqwdwqedwed dwed wedqs</p>
		<p>Valor: 50 pontos</p>
		<p>Quantidade:<input type="text" name="txt_qtde" size="5" maxlength="5"/></p>
		<p>CPF:<input type="text" name="txt_cpf" size="50" maxlength="11"/></p>
		<p><input type="submit" name="btn_vender" value="Vender"/></p>
	</form></div>
</body>
</html>