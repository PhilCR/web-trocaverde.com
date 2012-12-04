<?php
//Inclui o arquivo de verificação
include_once("verifica_loja.php");

session_start();

//receber dados
$cpf = $_POST["txt_cpf"];
$cod = $_POST["txt_cod"];
$qtde = $_POST["txt_qtde"];

//conectando ao banco de dados
$conn = mysql_connect("localhost", "loja", "012_proj") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("trocaverde", $conn);
}

//criando comando sql
$sql = "CALL compra('$cod','$qtde','$cpf');";
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
		
<?php
//executando comando
if(mysql_query($sql, $conn)) {
?>

			<p>Venda efetuada com sucesso.
			<input class="abutton" type="button" name="btn_voltar" value="Voltar" onclick="location.href='loja_index.php'"/></p>

<?php
} else {
?>

			<p>Erro: venda não efetuada.
			<input class="abutton" type="button" name="btn_voltar" value="Voltar" onclick="location.href='loja_index.php'"/></p>
	
<?php
}
?> 
		</div>
        
        <div id="footer" class="footer">
            copyright 2012
        </div>
    </body>
    
</html>