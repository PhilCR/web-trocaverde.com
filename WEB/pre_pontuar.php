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
				 <div class="span2 hero-unit" style="background-color:#ffa0a0; border-style:solid; border-width:3px; border-color:#000;">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							<p align="right">Olá <?php echo $_SESSION['nome']; ?>
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
				 <div class="span2 hero-unit" style="background-color:#ffa0a0; border-style:solid; border-width:3px; border-color:#000;">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							<p align="right">Olá <?php echo $_SESSION['nome']; ?>
							<button type="submit" class="btn btn-info btn-mini">Sair</button>
						</div>
					</form>
				</div>                
			</div>

			<!-- Área de Acesso [X] -->
			<div id="login" class="span3 offset3 hidden-desktop visible-tablet hidden-phone">
				<div class="span2 hero-unit" style="background-color:#ffa0a0; border-style:solid; border-width:3px; border-color:#000;">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							<p align="right">Olá <?php echo $_SESSION['nome']; ?>
							<button type="submit" class="btn btn-info btn-mini">Sair</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
    </div>

       
	<!-- Conteudo [X] -->
	<div id="content" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">

<?php
if($num == 0) {
	mysql_close($conn);
?>

		<h3>Cliente não encontrado</h3></br>
		<input class="btn btn-large btn-info" type="button" name="btn_voltar" value="Voltar" onclick="location.href='pontuador_index.php'"/></p>
	
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
				<tr><td><h4>Nome:</h4></td><td><h4><?php echo $nome ?> <?php echo $snome ?></h4></td></tr>
				<tr><td><h4>Data de Nascimento:</h4></td><td><h4><?php echo $data ?></h4></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td><h4>Trocados:</h4></td><td><h4><?php echo $pontos ?></h4></td></tr>
				<tr><td></td><td align="right"><input class="btn btn-large btn-info" type="submit" name="btn_pontuar" value="Confirmar Pontuação"/></td></tr>
			</table>
		</form>

<?php
}
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


