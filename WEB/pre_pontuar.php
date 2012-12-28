<?php
//Inclui o arquivo de verificação
include_once("verifica_pontuador.php");

session_start();

//receber dados
$cpf = $_POST["txt_cpf"];
$peso = $_POST["txt_peso"];
	
//calcular pontos (ainda indefinida)
$pontos = $peso;
	
//conectando ao banco de dados
$conn = mysql_connect("localhost", "pontuador", "pr0j_2012") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("trocaverde", $conn);
}

//criando comando sql
$sql = "CALL dados_cliente_por_cpf('$cpf');";

//executando comando
$rs = mysql_query($sql, $conn);

//verifica o numero de linhas do resultado
$num = mysql_num_rows($rs);
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
<?php
if($num == 0) {
	mysql_close($conn);
?>

			<p>Cliente não encontrado
			<input class="abutton" type="button" name="btn_voltar" value="Voltar" onclick="location.href='pontuador_index.php'"/></p>
	
<?php
} else {
	$rst = mysql_fetch_array($rs);
	$email = $rst["email"];
	$nome = $rst["nome"];
	$snome = $rst["snome"];
	$data = $rst["data_nasc"];
	mysql_close($conn);
?>	
		
			<form action="pontuar.php" name="form_pontuar" method="post">
				<input type="hidden" name="txt_email" value="<?php echo $email ?>"/>
				<input type="hidden" name="txt_pontos" value="<?php echo $pontos ?>"/>
				<table align="center">
					<tr><td>Nome:</td><td><?php echo $nome ?> <?php echo $snome ?></td></tr>
					<tr><td>Data de Nascimento:</td><td><?php echo $data ?></td></tr>
					<tr><td></td><td></td></tr>
					<tr><td>Pontos:</td><td><?php echo $pontos ?></td></tr>
					<tr><td></td><td align="right"><input class="abutton" type="submit" name="btn_pontuar" value="Confirmar Pontuação"/></td></tr>
				</table>
			</form>

<?php
}
?>
        </div>
        
        
        <div id="footer" class="footer">
            copyright 2012
        </div>
    </body>
    
</html>
