<?php
error_reporting(0);
//Inclui o arquivo de verificação
include_once("verifica_admin.php");

session_start();

//conectando ao banco de dados
$conn = mysql_connect("mysql.1freehosting.com", "u736022732_admin", "projet02012") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("u736022732_trocavrd", $conn);
}
//criando comando sql
$sql = "SELECT * FROM loja WHERE autorizada = 0;";
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>TrocaVerde.com - Seu lixo reciclado como desconto para você!</title> 

        <!-- Metas descritivas -->
        <meta name="description" content="Site de compras coletivas utilizando pontos para obtenção de descontos." />
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

        <!-- Habilitar Scripts Próprios -->
        <script type="text/javascript" src="js/troca.js"></script>
    </head>

<body class="container">
	<!-- Cabeçalho [X] -->
		<div id="header" class="container-fluid" style=" background-color:#a0cca0; border:1px solid #000000; border-radius:3px;z-index: 999;">

		<div class="container-fluid">
			<!-- Formulário de Localização de Ofertas [X] -->
			<div class="row btn-info" style="background-color:#a0a0ff; border:1px solid #004400; border-radius:1px;">
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
					Olá <b> <?php echo $_SESSION['nome']; ?></b> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
				<div align="right" class="span4 offset1 hiden-desktop visible-tablet hiden-phone">
					Olá <b> <?php echo $_SESSION['nome']; ?></b> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
				<div class="span2 hiden-desktop hiden-tablet visible-phone">
					Olá <b> <?php echo $_SESSION['nome']; ?></b> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
            </div>

        </div>


		<div class="container-fluid">
		
			<!-- Logotipo [X] -->
			<div class="span4">
				<a href="index.php" ><img src="img/logo.png"></a>
			</div>                			
		</div>
    </div>

	<!-- Conteudo mobile [X] -->
	<div id="content" class="container alert alert-info visible-phone hidden-desktop hidden-tablet" style="margin-bottom:0px;padding: 0px 0px 0px 0px;">
		
	</div>
       
	<!-- Conteudo [X] -->
	<div id="content" align="center" class="container alert alert-info visible-desktop visible-tablet hidden-phone" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
		<div class="btn-group">
			<button class="btn btn-info btn-large" name="btn_cadastro" value="Cadastro" onclick="location.href='admin_cadastro.php'">Cadastro</button>
			<button class="btn btn-info btn-large" name="btn_liberar_loja" value="Liberar Loja" onclick="location.href='admin_liberar_loja.php'"/>Liberar Loja</button>
			<button class="btn btn-info btn-large" name="btn_liberar_ofertas" value="Liberar Ofertas" onclick="location.href='admin_liberar_oferta.php'"/>Liberar Ofertas</button>
		</div><br>
<?php
//executando comando
$result = mysql_query($sql, $conn);

if($result) {
	$i = 0;

	while($row = mysql_fetch_array( $result )) {
		$i = $i + 1;
	
		$razao_social = $row['razao_social'];
		$nome_fantasia = $row['nome_fantasia']; 
		$telefone = $row['telefone'];
		$email = $row['email'];
?>
		<div class="span2 hero-unit" style="border-style:solid; border-width:1px; border-color:#000; font-size: 12px;">
			<b>Razão Social:</b> <?php echo $razao_social; ?></br>
			<b>Nome Fantasia:</b> <?php echo $nome_fantasia; ?></br>
			<b>Telefone:</b> <?php echo $telefone; ?></br>
			<b>Email:</b> <?php echo $email; ?></br>
			<form lass="row-fluid" action="admin_liberar_loja_2.php" name="form_liberar<?php echo $i; ?>" method="post">
				<input type="hidden" name="txt_email" value="<?php echo $email; ?>">
				<button type="submit" class="btn btn-large btn-info" name="btn_liberar">Liberar</button>
			</form>
		</div>
<?php
	}
	if($i == 0) {
?>
	<h3>Nenhuma loja esperando liberação.</h3><br>
	<input class="btn btn-large btn-info" type="button" name="btn_voltar" value="Voltar" onclick="location.href='admin_index.php'"/>
<?php
	}
} else {
?>
	<h3>Ocorreu um erro desconhecido.</h3><br>
	<input class="btn btn-large btn-info" type="button" name="btn_voltar" value="Voltar" onclick="location.href='admin_index.php'"/>
<?php
}

//encerrar conexão
mysql_close($conn);
?>
	</div>        

	<!-- Rodapé [X]-->
	<div id="footer" class="container-fluid btn-large btn-success btn-block" style="border:1px solid #000;">
		<div  class="span3">
			&copy; 2012 - All Rights Reserved.
		</div>
		<div class="span2 offset1">
			<a href="contato.php" title="Contate-nos" class="btn-success">Contate-nos</a>
		</div>

		<div class="span2">
			<a href="termos.php" title="Termos e Políticas" class="btn-success">Termos e Políticas</a>
		</div>

		<div class="span3">
			<a href="levs.php" title="Localização dos L.E.V.s" class="btn-success">Localização dos L.E.V.s</a>
		</div>

	</div>
</body>
    
</html>

