<?php
//recebendo dados
$nome = $_POST['txt_nome'];	
$snome = $_POST['txt_snome'];
$tel = $_POST['txt_tel'];
$cel = $_POST['txt_cel'];
$nasc = $_POST['txt_nasc'];	
$email = $_POST['txt_email'];
$pontos = 0;
$cpf = $_POST['txt_cpf'];
$end_rua = $_POST['txt_end_rua'];
$end_num = $_POST['txt_end_num'];
$end_comp = $_POST['txt_end_comp'];
$end_bar = $_POST['txt_end_bar'];
$end_cid = $_POST['txt_end_cid'];
$end_est = $_POST['txt_end_est'];
$end_cep = $_POST['txt_end_cep'];
$senha = $_POST['txt_senha'];

//conectando ao banco de dados
$conn = mysql_connect("localhost", "semcadastro", "cadastro") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("trocaverde", $conn);
}

//criando comando sql
$sql = "CALL cadastro_cliente('$nome','$snome','$tel','$cel','$nasc','$email',$pontos,'$cpf','$end_rua','$end_num','$end_comp','$end_bar','$end_cid','$end_est','$end_cep','$senha');";
?>

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
               
            <div class="titlebox">
                <p><font class="he1">TrocaVerde<font class="he2">.com</font></font></p>
				<p><font class="he3">Seu lixo reciclado como desconto para voc�!</font></p>
			</div>
			
        </div>
        
        <div align="center" id="content" class="content">

<?php
//executando comando
if(mysql_query($sql, $conn)) {
?>
			<p>Cadastro efetuado com sucesso.<br>
			<input class="abutton" type="button" name="btn_voltar" value="Voltar" onclick="location.href='index.php'"/></p>

<?php	
} else {
?>
			<p>Erro: cadastro n�o pode ser efetuado.<br>
			<input class="abutton" type="button" name="btn_voltar" value="Voltar" onclick="location.href='index.php'"/></p>

<?
}

//encerrar conex�o
mysql_close($conn);
?>
        </div>
        
        
        <div id="footer" class="footer">
            copyright 2012
        </div>
    </body>
    
</html>