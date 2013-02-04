<?php
error_reporting(0);
//Inclui o arquivo de verificação
include_once("verifica_loja.php");

session_start();

$email = $_SESSION["email"];

//conectando ao banco de dados
$conn = mysql_connect("mysql.1freehosting.com", "u736022732_admin", "projet02012") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("u736022732_trocavrd", $conn);
}

//criando comando sql
$sql = "select o.cod, o.nome_oferta, o.imagem, o.data_validade, o.pontos, o.descricao, o.qtde_max, o.qtde_vendida, l.nome_fantasia, l.telefone, o.autorizada from loja l, ofertas o where l.ID = o.ID_loja and l.email='$email';";

//executando comando
$rs = mysql_query($sql, $conn);

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
			<div class="row btn-info" style="background-color:#ffd0a0; color:#ffd0a0; border:1px solid #004400; border-radius:1px;">
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
					Olá <b> <?php echo $_SESSION['razao_social']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
				<div align="right" class="span4 offset1 hiden-desktop visible-tablet hiden-phone">
					Olá <b> <?php echo $_SESSION['razao_social']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
				<div class="span2 hiden-desktop hiden-tablet visible-phone">
					Olá <b> <?php echo $_SESSION['razao_social']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
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
       
	<!-- Conteudo [X] -->
	<div id="content" align="center" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
		<div  class="btn-group">
			<button class="btn btn-info btn-large" name="btn_cadastro" value="Cadastro" onclick="location.href='cadastro_oferta.php'">Cadastrar Oferta</button>
			<button class="btn btn-info btn-large" name="btn_alterar" value="Alterar" onclick="location.href='loja_alterar_cadastro.php'">Alterar Cadastro</button>
		</div>

		<div class="row-fluid">
			<ul class="thumbnails">
<?php
while($rst = mysql_fetch_array( $rs )) {
	$cod = $rst["cod"];
	$nome_oferta = $rst["nome_oferta"];
	$imagem = $rst["imagem"];
	$data_validade = $rst["data_validade"];
	$pontos = $rst["pontos"];
	$descricao = $rst["descricao"];
	$qtde_max = $rst["qtde_max"];
	$qtde_vendida = $rst["qtde_vendida"];
	$nome_fantasia = $rst["nome_fantasia"];
	$telefone = $rst["telefone"];
	$autorizada = $rst["autorizada"];
?>
				<li class="span4">
					<div class="thumbnail">
						<img src="<?php echo $imagem; ?>" alt="">
						<div class="caption">
							<form action="iniciar_venda.php" name="form_vender" method="post">
								<input type="hidden" name="txt_cod" value="<?php echo $cod; ?>"/>
								<input type="hidden" name="txt_valor" value="<?php echo $pontos; ?>"/>
								<h3><?php echo $nome_oferta; ?></h3>
								<h4><?php echo $nome_fantasia; ?></h4>
								<p><?php echo $descricao; ?></p>
								<table width="100%">
									<tr><td>Quantidade: <?php echo $qtde_max; ?></td><td>Vendidos: <?php echo $qtde_vendida; ?></td></tr>
									<tr><td>Valor: <?php echo $pontos; ?> trocados</td>
<?php
if($autorizada == '1') {
?>
									<td align="right"><input class="btn btn-small" type="submit" name="btn_vender" value="Vender"/></td></tr>
<?php
} else {
?>
									<td align="right">Não Liberada!</td></tr>

<?php
}
?>
								</table>
							</form>
						</div>
					</div>
				</li>
<?php
}
?>
			</ul>
		</div>
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