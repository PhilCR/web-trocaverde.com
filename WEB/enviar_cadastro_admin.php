<?php
//recebendo dados
$nome = $_POST['txt_nome'];
$snome = $_POST['txt_snome'];
$tel = $_POST['txt_tel'];
$email = $_POST['txt_email'];
$senha = $_POST['txt_senha'];

//conectando ao banco de dados
$conn = mysql_connect("localhost", "admin", "projet02012") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("trocaverde", $conn);
}

//criando comando sql
$sql = "CALL cadastro_admin('$nome','$snome','$tel','$email','$senha');";
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
			
            <div id="login" class="login_adm">
				<p align="right">Olá <?php echo $_SESSION['nome']; ?>
				<input align="right" class="abutton" type="button" name="btn_sair" value="Sair" onclick="location.href='sair.php'"/></p>
            </div>
			
        </div>
        
        <div align="center" id="content" class="content">
<?php
//executando comando
if(mysql_query($sql, $conn)) {
?>
			<p>Cadastro efetuado com sucesso.<br>
			<input class="abutton" type="button" name="btn_voltar" value="Voltar" onclick="location.href='admin_index.php'"/></p>

<?php	
} else {
?>
			<p>Erro: cadastro não pode ser efetuado.<br>
			<input class="abutton" type="button" name="btn_voltar" value="Voltar" onclick="location.href='admin_index.php'"/></p>

<?
}

//encerrar conexão
mysql_close($conn);
?>
        </div>
        
        
        <div id="footer" class="footer">
            copyright 2012
        </div>
    </body>
    
</html>