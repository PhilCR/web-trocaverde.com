<?php
include_once("redireciona.php");

$local = $_POST['txt_local'];

if(empty($local)) {
	$local = 'Sorocaba';
}

if($local == 'none') {
	$local = 'Sorocaba';
}

//conectando ao banco de dados
$conn = mysql_connect("localhost", "semcadastro", "cadastro") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("trocaverde", $conn);
}

//criando comando sql
$sql = "select o.nome_oferta, o.imagem, o.data_validade, o.pontos, o.descricao, o.qtde_max, o.qtde_vendida, l.nome_fantasia, l.telefone from loja l, ofertas o where l.ID = o.ID_loja and regiao = '$local' and o.autorizada = 1;";

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

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" lang="pt-BR" >

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
        <script type="text/javascript" src="js/ValidaLogin.js"></script>
		
		<script type="text/javascript">
			function alterarLocal() {
				var option_local = document.getElementById("regionlocation");
				var local = option_local.options[option_local.selectedIndex].value;
				
				var txt_local = document.getElementById("txt_local");
				txt_local.value = local;
				
				document.forms["form_local"].submit();
			}
		</script>

    </head>

<body class="container">
	<!-- Cabeçalho [X] -->
	<div id="header" class="container-fluid" style=" background-color:#a0cca0; border:1px solid #000000; border-radius:3px;z-index: 999;">

		<div class="container-fluid">
			<!-- Formulário de Localização de Ofertas [X] -->
			<div class="container-fluid span6 offset2 btn-info" style="border:1px solid #004400; border-radius:1px;">
				<div class="span2">
					<i class="icon-map-marker icon-white"></i><b>Local</b>
				</div>
				<div class="span1" >
					<select id="regionlocation" name="regiao" style="width:150px;" onChange="alterarLocal()">
						<option value="none"  disabled="disabled" selected="selected">Região</option>
						<option value="Sorocaba">Sorocaba</option>
						<option value="Campinas">Campinas</option>
					</select>
					<form style="display: none;" action="index.php" id="form_local" name="form_local" method="post">
						<input type="text" name="txt_local" id="txt_local" value="" />
					</form>
				</div>
            </div>

			<!-- Menu Usuário para Mobile [X] -->
			<div class="span1 visible-phone hidden-desktop hidden-tablet">
				<div class="btn-group">
				<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user icon-white"></i>
					Entrar
					<span class="caret"></span></a>
					
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
						<li>
							 <div class="span2">
								<form class="form-horizontal" action="autenticar.php" name="form_login" method="post">
									<div class="input-append">
										<input class="input-medium" type="text" name="txt_email" id="email" placeholder="Digite seu Email">
										<span class="add-on"><i class="icon-envelope"></i></span>
									</div>
									<div class="input-append">
										<input class="input-medium" type="password" name="txt_senha" placeholder="Digite sua Senha">
										<span class="add-on"><i class="icon-lock"></i></span>
									</div>
									<div class="row-fluid">
										<label class="checkbox">
											<input type="checkbox"> Lembrar-me
										</label> 
										<button type="button" class="btn btn-info btn-small" onclick="validarLogin()" >Acesso</button>
										<button type="button" class="btn btn-small" onclick=location.href='cadastro.php'>Cadastro</button>
                                        <button style="display:none;" type="submit" id="btn_acessar2" name="btn_acessar2"></button>
									</div>
								</form>
							</div>                   
						</li>
                    </ul>  
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
					<form class="form-horizontal" action="autenticar.php" name="form_login" method="post" disabled>
						<div class="input-append">
							<input class="input-medium" type="text" name="txt_email" id="email" placeholder="Digite seu Email">
							<span class="add-on"><i class="icon-envelope"></i></span>
						</div>
						<div class="input-append">
							<input class="input-medium" type="password" name="txt_senha" placeholder="Digite sua Senha">
							<span class="add-on"><i class="icon-lock"></i></span>
						</div>
						<div class="row-fluid">
							<label class="checkbox">
								<input type="checkbox"> Lembrar-me
							</label> 
							<button type="button" class="btn btn-info btn-small" onclick="validarLogin()" >Acesso</button>
							<button type="button" class="btn btn-small" onclick=location.href='cadastro.php'>Cadastro</button>
                            <button style="display:none;" type="submit" id="btn_acessar2" name="btn_acessar2"></button>
						</div>
					</form>
				</div>                
			</div>

			<!-- Área de Acesso [X] -->
			<div id="login" class="span3 offset3 hidden-desktop visible-tablet hidden-phone">
				<div class="span2">
					<form class="form-horizontal" action="autenticar.php" name="form_login" method="post" disabled>
						<div class="input-append">
							<input class="input-medium" type="text" name="txt_email" id="email" placeholder="Digite seu Email">
							<span class="add-on"><i class="icon-envelope"></i></span>
						</div>
						<div class="input-append">
							<input class="input-medium" type="password" name="txt_senha" placeholder="Digite sua Senha">
							<span class="add-on"><i class="icon-lock"></i></span>
						</div>
						<div class="row-fluid">
							<label class="checkbox">
								<input type="checkbox"> Lembrar-me
							</label> 
							<button type="button" class="btn btn-info btn-small" onclick="validarLogin()" >Acesso</button>
							<button type="button" class="btn btn-small" onclick=location.href='cadastro.php'>Cadastro</button>
                            <button style="display:none;" type="submit" id="btn_acessar2" name="btn_acessar2"></button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
    </div>
	
	<!-- Conteudo [X] -->
	<div id="content" class="container alert alert-info" style="margin-bottom:0px; padding: 0px 0px 0px 0px; height-min: 300px; min-height: 300px;">
		<div class="row-fluid">
			<ul class="thumbnails">
<?php
$rst = mysql_fetch_array($rs);

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
							<h3><?php echo $nome_oferta; ?></h3>
							<h4><?php echo $nome_fantasia; ?></h4>
							<p><?php echo $descricao; ?></p>
							<table width="100%">
								<tr><td>Quantidade: <?php echo $qtde_max; ?></td><td>Vendidos: <?php echo $qtde_vendida; ?></td></tr>
								<tr><td>Valor: <?php echo $pontos; ?> trocados</td></tr>
								<tr><td>Validade: <?php echo $data_validade; ?></td></tr>
								<tr><td>Telefone: <?php echo $telefone; ?></td></tr>
							</table>
						</div>
					</div>
				</li>
<?php
$rst = mysql_fetch_array($rs);

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
							<h3><?php echo $nome_oferta; ?></h3>
							<h4><?php echo $nome_fantasia; ?></h4>
							<p><?php echo $descricao; ?></p>
							<table width="100%">
								<tr><td>Quantidade: <?php echo $qtde_max; ?></td><td>Vendidos: <?php echo $qtde_vendida; ?></td></tr>
								<tr><td>Valor: <?php echo $pontos; ?> trocados</td></tr>
								<tr><td>Validade: <?php echo $data_validade; ?></td></tr>
								<tr><td>Telefone: <?php echo $telefone; ?></td></tr>
							</table>
						</div>
					</div>
				</li>
<?php
$rst = mysql_fetch_array($rs);

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
							<h3><?php echo $nome_oferta; ?></h3>
							<h4><?php echo $nome_fantasia; ?></h4>
							<p><?php echo $descricao; ?></p>
							<table width="100%">
								<tr><td>Quantidade: <?php echo $qtde_max; ?></td><td>Vendidos: <?php echo $qtde_vendida; ?></td></tr>
								<tr><td>Valor: <?php echo $pontos; ?> trocados</td></tr>
								<tr><td>Validade: <?php echo $data_validade; ?></td></tr>
								<tr><td>Telefone: <?php echo $telefone; ?></td></tr>
							</table>
						</div>
					</div>
				</li>
			</ul>
		</div>
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
