<?php
//Inclui o arquivo de verificação
include_once("verifica_admin.php");

session_start();

$mysqli = mysqli_init();	
$mysqli->real_connect('mysql.1freehosting.com', 'u736022732_admin', 'projet02012', 'u736022732_trocavrd');
if (mysqli_connect_errno())
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
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
			<!-- Menu Usuário para Mobile [X] -->
			<div class="span1 visible-phone hidden-desktop hidden-tablet">
				<div class="span2 hero-unit" style="background-color:#a0a0ff; border-style:solid; border-width:3px; border-color:#000;">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							Olá <?php echo $_SESSION['nome']; ?>
							<button type="submit" class="btn btn-info btn-mini">Sair</button>
						</div>
					</form>
				</div>                     
            </div>
        </div>


		<div class="container-fluid">
		
			<!-- Logotipo [X] -->
			<div class="span3">
				<a href="index.php" ><img src="img/logo.png"></a>
			</div>                  

			<!-- Área de Acesso [X] -->
			<div id="login" class="span2 offset5 visible-desktop hidden-tablet hidden-phone">
				 <div class="span2 hero-unit" style="background-color:#a0a0ff; border-style:solid; border-width:3px; border-color:#000;">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							Olá <?php echo $_SESSION['nome']; ?>
							<button type="submit" class="btn btn-info btn-mini">Sair</button>
						</div>
					</form>
				</div>                
			</div>

			<!-- Área de Acesso [X] -->
			<div id="login" class="span3 offset3 hidden-desktop visible-tablet hidden-phone">
				<div class="span2 hero-unit" style="background-color:#a0a0ff; border-style:solid; border-width:3px; border-color:#000;">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							Olá <?php echo $_SESSION['nome']; ?>
							<button type="submit" class="btn btn-info btn-mini">Sair</button>
						</div>
					</form>
				</div>     
			</div>
			
		</div>
    </div>

	<!-- Conteudo mobile [X] -->
	<div id="content" class="container alert alert-info visible-phone hidden-desktop hidden-tablet" style="margin-bottom:0px;padding: 0px 0px 0px 0px;">
		
	</div>
       
	<!-- Conteudo [X] -->
	<div id="content" class="container alert alert-info visible-desktop visible-tablet hidden-phone" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
<?php
//executando comando
$mysqli->real_query ("SELECT * FROM loja WHERE autorizada = 0;");
$result = $mysqli->store_result();

if($result) {
	$i = 0;

	while($row = $rs->fetch_assoc()) {
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
$mysqli->close();
?>
	</div>        

	<!-- Rodapé [X]-->
	<div id="footer" class="container-fluid btn-large btn-success btn-block" style="border:1px solid #000;">
		<div  class="span3">
			&copy; 2012 - All Rights Reserved.
		</div>
		<div class="span2 offset1">
			<a href="contato.html" target="blank" title="Contate-nos" class="btn-success">Contate-nos</a>
		</div>

		<div class="span2">
			<a href="termos.html" target="blank" title="Termos e Políticas" class="btn-success">Termos e Políticas</a>
		</div>

		<div class="span3">
			<a href="levs.php" target="blank" title="Localização dos L.E.V.s" class="btn-success">Localização dos L.E.V.s</a>
		</div>

	</div>
</body>
    
</html>

