<?php
error_reporting(0);
session_start();

$email1 = $_SESSION["email"];

//recebendo dados
$nome = $_POST['txt_nome'];	
$snome = $_POST['txt_snome'];
$tel = $_POST['txt_tel'];
$cel = $_POST['txt_cel'];
$nasc = $_POST['txt_data'];	
$email2 = $_POST['txt_email'];
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
$conn = mysql_connect("mysql.1freehosting.com", "u736022732_admin", "projet02012") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("u736022732_trocavrd", $conn);
}

//criando comando sql
$sql = "CALL atualiza_cliente('$email1', '$nome', '$snome', '$tel', '$cel', '$nasc', '$email2', '$cpf', '$end_rua', '$end_num', '$end_comp', '$end_bar', '$end_cid', '$end_est', '$end_cep', '$senha');";
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>TrocaVerde.com - Seu lixo reciclado como desconto para voc�!</title> 

        <!-- Metas descritivas -->
        <meta name="description" content="Site de compras coletivas utilizando pontos para obten��o de descontos." />
        <meta name="keywords" content="descontos, coletivo, compra, reciclagem, shopping" />

        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" lang="pt-BR" >

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">

        <!-- Habilitando a Responsive Design -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">

        <!-- Habilitar JQuery Script -->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.js"></script>

        <!-- Habilitar Scripts Pr�prios -->
        <script type="text/javascript" src="js/troca.js"></script>

    </head>

<body class="container">
	<!-- Cabe�alho [X] -->
	<div id="header" class="container-fluid" style=" background-color:#a0cca0; border:1px solid #000000; border-radius:3px;z-index: 999;">

		<div class="container-fluid">
			<!-- Formul�rio de Localiza��o de Ofertas [X] -->
			<div class="row btn-info" style="border:1px solid #004400; border-radius:1px;">
				<div class="span1">
					<a href="index.php" style="color:#ffffff;"><b>Home</b></a>
				</div>
				<div class="span2 offset1 hidden-desktop visible-tablet hidden-phone" align="center">

				</div>
				<div class="span2 offset2 visible-desktop hidden-tablet hidden-phone" align="center">

				</div>
				<div class="span2 hiden-desktop hiden-tablet visible-phone">

				</div>
				<div align="right" class="span4 offset1 visible-desktop hidden-tablet hidden-phone">
					Ol� <b> <?php echo $_SESSION['nome']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
				<div align="right" class="span4 offset1 hiden-desktop visible-tablet hiden-phone">
					Ol� <b> <?php echo $_SESSION['nome']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
				<div class="span2 hiden-desktop hiden-tablet visible-phone">
					Ol� <b> <?php echo $_SESSION['nome']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
            </div>

			<!-- Menu Usu�rio para Mobile [X] -->
			<div class="span1 visible-phone hidden-desktop hidden-tablet">
				 <div align="center"class="span2 btn-large" style="background-color:#a0ffa0; border-style:solid; border-width:3px; border-color:#000;">
						</br>Saldo: <?php echo $_SESSION['pontos']; ?> trocados</br></br>
				</div>                   
            </div>
        </div>


		<div class="container-fluid">
		
			<!-- Logotipo [X] -->
			<div class="span4">
				<a href="index.php" ><img src="img/logo.png"></a>
			</div>                  

			<!-- �rea de Acesso [X] -->
			<div id="login" class="span2 offset4 btn-large visible-desktop hidden-tablet hidden-phone" style="background-color:#a0ffa0; border-style:solid; border-width:3px; border-color:#000;">
				Saldo: <?php echo $_SESSION['pontos']; ?> trocados</br>                
			</div>

			<!-- �rea de Acesso [X] -->
			<div id="login" class="span2 offset3 btn-large hidden-desktop visible-tablet hidden-phone" style="background-color:#a0ffa0; border-style:solid; border-width:3px; border-color:#000;">
				Saldo: <?php echo $_SESSION['pontos']; ?> trocados</br>                
			</div>
			
		</div>
    </div>

       
	<!-- Conteudo [X] -->
	<div id="content" align="center" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
<?php
//executando comando
if(mysql_query($sql, $conn)) {
?>
		<h3>Altera��o efetuada com sucesso.</h3><br>
		<input class="btn btn-large btn-info" type="button" name="btn_voltar" value="Sair" onclick="location.href='sair.php'"/>

<?php	
} else {
?>
		<h3>Erro: altera��o n�o pode ser efetuada.</h3><br>
		<input class="btn btn-large btn-info" type="button" name="btn_voltar" value="Voltar" onclick="location.href='index.php'"/>

<?
}

//encerrar conex�o
mysql_close($conn);
?>
	</div>        

	<!-- Rodap� [X]-->
	<div id="footer" class="container-fluid btn-large btn-success btn-block" style="border:1px solid #000;">
		<div  class="span3">
			&copy; 2012 - All Rights Reserved.
		</div>
		<div class="span2 offset1">
			<a href="contato.php" title="Contate-nos" class="btn-success">Contate-nos</a>
		</div>

		<div class="span2">
			<a href="termos.php" title="Termos e Pol�ticas" class="btn-success">Termos e Pol�ticas</a>
		</div>

		<div class="span3">
			<a href="levs.php" title="Localiza��o dos L.E.V.s" class="btn-success">Localiza��o dos L.E.V.s</a>
		</div>

	</div>
</body>
    
</html>