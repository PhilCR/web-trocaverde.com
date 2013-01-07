<?php
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
		
		<script type="text/javascript">
			function enviar() {
				var d  = document.getElementById('dia');
				var m  = document.getElementById('mes');
				var a = document.getElementById('ano');
				
				var dia = d.options[d.selectedIndex].value;
				var mes =  m.options[m.selectedIndex].value;
				var ano = a.options[a.selectedIndex].value;
				
				var txt_data = document.getElementById('txt_data');
				
				var data = ano + mes + dia;
				
				txt_data.value = data;
				
				document.getElementById("btn_cadastrar2").click();
			}
		</script>

    </head>

<body class="container">
	<!-- Cabeçalho [X] -->
	<div id="header" class="container-fluid" style=" background-color:#a0cca0; border:1px solid #000000; border-radius:3px;z-index: 999;">

		<div class="container-fluid">

			<!-- Menu Usuário para Mobile [X] -->
			<div class="span1 visible-phone hidden-desktop hidden-tablet">
				<div class="span2 hero-unit" style="background-color:#ffd0a0; border-style:solid; border-width:3px; border-color:#000;">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							Olá <?php echo $_SESSION['razao_social']; ?>
							<button type="submit" class="btn btn-info btn-small">Sair</button>
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
				 <div class="span2 hero-unit" style="background-color:#ffd0a0; border-style:solid; border-width:3px; border-color:#000;">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							Olá <?php echo $_SESSION['razao_social']; ?>
							<button type="submit" class="btn btn-info btn-small">Sair</button>
						</div>
					</form>
				</div>                
			</div>

			<!-- Área de Acesso [X] -->
			<div id="login" class="span3 offset3 hidden-desktop visible-tablet hidden-phone">
				<div class="span2 hero-unit" style="background-color:#ffd0a0; border-style:solid; border-width:3px; border-color:#000;">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							Olá <?php echo $_SESSION['razao_social']; ?>
							<button type="submit" class="btn btn-info btn-small">Sair</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
    </div>

       
	<!-- Conteudo [X] -->
	<div id="content" align="center" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
		<h2>Cadastro de Ofertas</h2>
		<form class="row-fluid" action="cadastrar_oferta.php" name="form_cadastro_oferta" method="post">
			<div class="span3 input-append">
				<input type="text" class="input-large" name="txt_nome_oferta" size="50" maxlength="70" placeholder="Digite o Nome da Oferta" required/><abbr title="Preencha com onome da oferta que você deseja cadastrar."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_imagem" size="200" maxlength="200" placeholder="Imagem" required/><abbr title="Preencha com link da imagem, esta já deve estar cadastrada em um servidor externo."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			<div class="span5 input-append">
				<input type="text" class="input-large" name="txt_descricao"  size="50" maxlength="70" placeholder="Descrição" required/><abbr title="Preencha com a descrição da oferta que irá cadastrar."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_tag" size="50" maxlength="70" placeholder="Digite as tags" required/><abbr title="Preencha com tags para sua oferta."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			<div class="span3 input-append">
				<input type="text" class="input-large" name="txt_qtde" size="50" maxlength="70" placeholder="Digite a Quantidade" required/><abbr title="Preencha com a quantidade disponivel da oferta que deseja cadastrar."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
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
				</select><abbr title="Selecione sua data de nascimento"><span class="add-on"><i class="icon-asterisk"></i></span></abbr>
			</div>
			<div class="span8">
				<div class="span4">
					<button class="btn btn-large btn-info btn-block" type="button" onclick="enviar()" name="btn_verificar">Cadastrar</button>
					<button style="display:none;" type="submit" id="btn_cadastrar2" name="btn_cadastrar"></button>
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