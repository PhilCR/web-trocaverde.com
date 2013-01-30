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
$sql = "select o.cod, o.nome_oferta, o.imagem, o.data_validade, o.pontos, o.descricao, o.qtde_max, o.qtde_vendida, l.nome_fantasia, l.telefone from loja l, ofertas o where l.ID = o.ID_loja and o.autorizada = 0;";
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
	<div id="content" align="center" class="container alert alert-info visible-desktop visible-tablet hidden-phone" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
		<div class="btn-group">
			<button class="btn btn-info btn-large" name="btn_cadastro" value="Cadastro" onclick="location.href='admin_cadastro.php'">Cadastro</button>
			<button class="btn btn-info btn-large" name="btn_liberar_loja" value="Liberar Loja" onclick="location.href='admin_liberar_loja.php'"/>Liberar Loja</button>
			<button class="btn btn-info btn-large" name="btn_liberar_ofertas" value="Liberar Ofertas" onclick="location.href='admin_liberar_oferta.php'"/>Liberar Ofertas</button>
		</div><br>
		<div class="row-fluid">
			<ul class="thumbnails">
<?php
//executando comando
$result = mysql_query($sql, $conn);

if($result) {
	$i = 0;

	while($rst = mysql_fetch_array( $result )) {
		$i = $i + 1;
		
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
?>
				<li class="span4">
					<div class="thumbnail">
						<img src="<?php echo $imagem; ?>" alt="">
						<div class="caption">
							<form lass="row-fluid" action="admin_liberar_oferta2.php" name="form_liberar<?php echo $i; ?>" method="post">
								<input type="hidden" name="txt_cod" value="<?php echo $cod; ?>" />
								<h3><?php echo $nome_oferta; ?></h3>
								<h4><?php echo $nome_fantasia; ?></h4>
								<p><?php echo $descricao; ?></p>
								<table width="100%">
									<tr><td>Quantidade: <?php echo $qtde_max; ?></td><td>Vendidos: <?php echo $qtde_vendida; ?></td></tr>
									<tr><td>Validade: <?php echo $data_validade; ?></td></tr>
									<tr><td>Telefone: <?php echo $telefone; ?></td></tr>
									<tr></tr>
									<tr><td>Valor: <abbr title="Insira o valor da oferta."><input type="text" class="input-mini" id="txt_valor" name="txt_valor" maxlength="6" placeholder="" required></abbr> trocados</td>
									<td><button class="btn btn-large btn-info" type="submit" name="btn_cadastrar">Liberar</button></td></tr>
								</table>
							</form>
						</div>
					</div>
				</li>
<?php
	}
	if($i == 0) {
?>
	<h3>Nenhuma oferta esperando liberação.</h3><br>
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

 