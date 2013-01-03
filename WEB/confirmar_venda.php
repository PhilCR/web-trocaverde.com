<?php
//Inclui o arquivo de verificação
include_once("verifica_loja.php");

session_start();

//receber dados
$cpf = $_POST["txt_cpf"];
$cod = $_POST["txt_cod"];
$valor = $_POST["txt_valor"];
$qtde = $_POST["txt_qtde"];

//calculando total
$total = $valor * $qtde;

//conectando ao banco de dados
$conn = mysql_connect("localhost", "loja", "012_proj") or die("Impossivel conectar");

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
				<div class="btn-group">
					 <div class="span2">
						<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
							<div class="row-fluid">
								<p align="right">Olá <?php echo $_SESSION['razao_social']; ?>
							</div>
							<div class="row-fluid">
								<button type="submit" class="btn btn-info btn-small">Sair</button>
							</div>
						</form>
					</div>                   
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
				 <div class="span2">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							<p align="right">Olá <?php echo $_SESSION['razao_social']; ?>
						</div>
						<div class="row-fluid">
							<button type="submit" class="btn btn-info btn-small">Sair</button>
						</div>
					</form>
				</div>                
			</div>

			<!-- Área de Acesso [X] -->
			<div id="login" class="span3 offset3 hidden-desktop visible-tablet hidden-phone">
				<div class="span2">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							<p align="right">Olá <?php echo $_SESSION['razao_social']; ?>
						</div>
						<div class="row-fluid">
							<button type="submit" class="btn btn-info btn-small">Sair</button>
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

		<p>Cliente não encontrado.
		<input class="abutton" type="button" name="btn_voltar" value="Voltar" onclick="location.href='loja_index.php'"/></p>
	
<?php
} else {
	$rst = mysql_fetch_array($rs);
	$nome = $rst["nome"];
	$snome = $rst["snome"];
	$data = $rst["data_nasc"];
	$pontos = $rst["pontos"];
	mysql_close($conn);
	
	if($pontos < $total) {
?>

		<p>Cliente não tem trocados o suficiente.
		<input class="abutton" type="button" name="btn_voltar" value="Voltar" onclick="location.href='loja_index.php'"/></p>

<?php
	} else {
?>	
		<form action="verder.php" name="form_vender" method="post">
			<input type="hidden" name="txt_cpf" value="<?php echo $cpf ?>"/>
			<input type="hidden" name="txt_cod" value="<?php echo $cod ?>"/>
			<input type="hidden" name="txt_qtde" value="<?php echo $qtde ?>"/>
			<table>
				<tr><td>Nome: <?php echo $nome ?> <?php echo $snome ?></td><td></td></tr>
				<tr><td>Data de Nascimento: <?php echo $data ?></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td>Oferta: Coxinha 30% off</td><td></td></tr>
				<tr><td>Quantidade: <?php echo $qtde ?></td><td>Total: <?php echo $total ?> trocados</td></tr>
				<tr><td></td><td align="right"><input class="abutton" type="submit" name="btn_vender" value="Vender"/></td></tr>
			</table>
		</form>	
<?php
	}
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