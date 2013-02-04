 <?php
 error_reporting(0);
//Inclui o arquivo de verificação
include_once("verifica_loja.php");

session_start();
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
		<script type="text/javascript" src="js/ValidaOferta.js"></script>
		
		<script type="text/javascript">
		</script>

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
		<h2>Cadastro de Ofertas</h2>
		<form class="row-fluid" action="cadastrar_oferta.php" name="form_cadastro_oferta" method="post">
			<div class="span3 input-append">
				<abbr title="Preencha com onome da oferta que você deseja cadastrar."><input type="text" class="input-large" name="txt_nome_oferta" size="50" maxlength="70" placeholder="Digite o Nome da Oferta" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<abbr title="Preencha com link da imagem, esta já deve estar cadastrada em um servidor externo."><input type="text" class="input-large" name="txt_imagem" size="200" maxlength="200" placeholder="Imagem" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			<div class="span5 input-append">
				<abbr title="Preencha com a descrição da oferta que irá cadastrar."><input type="text" class="input-large" name="txt_descricao"  size="50" maxlength="70" placeholder="Descrição" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<abbr title="Preencha com tags para sua oferta."><input type="text" class="input-large" name="txt_tag" size="50" maxlength="70" placeholder="Digite as tags" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			<div class="span3 input-append">
				<abbr title="Preencha com a quantidade disponivel da oferta que deseja cadastrar."><input type="text" class="input-large" name="txt_qtde" id="txt_qtde" size="50" maxlength="70" placeholder="Digite a Quantidade" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<label>Data de Termino</label>
				<input type="hidden" class="input-small" id="txt_data" name="txt_data" maxlength="8" required>
				<select class="span3"  name="dia" id="dia">
					<option value="" disabled="disabled" selected="selected">Dia</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				<select class="span4" name="dia" id="mes">
					<option value="" disabled="disabled" selected="selected">Mês</option>
					<option value="01">Janeiro</option>
					<option value="02">Fevereiro</option>
					<option value="03">Março</option>
					<option value="04">Abril</option>
					<option value="05">Maio</option>
					<option value="06">Junho</option>
					<option value="07">Junlho</option>
					<option value="08">Agosto</option>
					<option value="09">Setembro</option>
					<option value="10">Outubro</option>
					<option value="11">Novembro</option>
					<option value="12">Dezembro</option>
				</select>
				<select class="span4" name="ano" id="ano">
					<option value="" disabled="disabled" selected="selected">Ano</option>
					<option value="2012">2013</option>
					<option value="2011">2014</option>
					<option value="2010">2015</option>
					<option value="2009">2016</option>
				</select><abbr title="Selecione a data"><span class="add-on"><i class="icon-asterisk"></i></span></abbr>
			</div>
			<div class="span8">
				<div class="span4">
					<button class="btn btn-large btn-info btn-block" type="submit" id="btn_cadastrar2" name="btn_cadastrar" onclick="enviar();return false;">Cadastrar</button>
					<!--<button class="btn btn-large btn-info btn-block" type="button" onclick="enviar()" name="btn_verificar">Cadastrar</button>
					<button style="display:none;" type="submit" id="btn_cadastrar2" name="btn_cadastrar"></button>-->
				</div>
			</div>
		</form>
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