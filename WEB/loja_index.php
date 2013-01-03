<?php
//Inclui o arquivo de verifica��o
include_once("verifica_loja.php");

session_start();
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>TrocaVerde.com - Seu lixo reciclado como desconto para voc�!</title> 

        <!-- Metas descritivas -->
        <meta name="description" content="Site de compras coletivas utilizando pontos para obten��o de descontos." />
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

        <!-- Habilitar Scripts Pr�prios -->
        <script type="text/javascript" src="js/troca.js"></script>

    </head>

<body class="container">
	<!-- Cabe�alho [X] -->
	<div id="header" class="container-fluid" style=" background-color:#a0cca0; border:1px solid #000000; border-radius:3px;z-index: 999;">

		<div class="container-fluid">

			<!-- Menu Usu�rio para Mobile [X] -->
			<div class="span1 visible-phone hidden-desktop hidden-tablet">
				<div class="btn-group">
					 <div class="span2">
						<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
							<div class="row-fluid">
								<p align="right">Ol� <?php echo $_SESSION['razao_social']; ?>
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

			<!-- �rea de Acesso [X] -->
			<div id="login" class="span2 offset5 visible-desktop hidden-tablet hidden-phone">
				 <div class="span2">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							<p align="right">Ol� <?php echo $_SESSION['razao_social']; ?>
						</div>
						<div class="row-fluid">
							<button type="submit" class="btn btn-info btn-small">Sair</button>
						</div>
					</form>
				</div>                
			</div>

			<!-- �rea de Acesso [X] -->
			<div id="login" class="span3 offset3 hidden-desktop visible-tablet hidden-phone">
				<div class="span2">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							<p align="right">Ol� <?php echo $_SESSION['razao_social']; ?>
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
		<div class="mainofferbox" align="left"><form action="iniciar_venda.php" name="form_vender" method="post">
				<table>
				<tr><td><img src="img/imagem.png" class=""></td>
				<td>
					<p>Oferta 1</p>
					<p>Cantina</p>
					<input type="hidden" name="txt_cod" value="0"/>
					<input type="hidden" name="txt_valor" value="0"/>
					<p>descri��o haiuhsasuidhasd sbduasbdui ad aisd asd asd asda dasj dasjk das dasm dam,s dasm,d am,sd sm
					sdmamjsaiofb dfgddsajsna sndsjadnas iodsaiosd ns erewqwiwdqwdqwe we qwr qwe ewfw wefwe fewf ewf ewf nd
					wdqwdwa qwe qedqw dw dq dqwq d wdqwdqwdqw d wqdqwd qqdqdqwdqwdqwdqwdqwdqwdqwdqwdwqedwed dwed wedqs</p>
					<table width="100%">
						<tr><td>Quantidade: 0</td><td>Vendidos: 0</td></tr>
						<tr><td>Valor: 0 trocados</td>
							<td align="right"><input class="abutton" type="submit" name="btn_vender" value="Vender"/></td></tr>
					</table>
				</td></tr>
				</table>
			</form></div>
			<div class="mainofferbox" align="left"><form action="iniciar_venda.php" name="form_vender" method="post">
				<table>
				<tr><td><img src="img/coxinha.jpeg" class=""></td>
				<td>
					<p>Coxinha 30% off</p>
					<p>Cantina</p>
					<input type="hidden" name="txt_cod" value="2"/>
					<input type="hidden" name="txt_valor" value="200"/>
					<p>descri��o haiuhsasuidhasd sbduasbdui ad aisd asd asd asda dasj dasjk das dasm dam,s dasm,d am,sd sm
					sdmamjsaiofb dfgddsajsna sndsjadnas iodsaiosd ns erewqwiwdqwdqwe we qwr qwe ewfw wefwe fewf ewf ewf nd
					wdqwdwa qwe qedqw dw dq dqwq d wdqwdqwdqw d wqdqwd qqdqdqwdqwdqwdqwdqwdqwdqwdqwdwqedwed dwed wedqs</p>
					<table width="100%">
						<tr><td>Quantidade: 1000</td><td>Vendidos: 0</td></tr>
						<tr><td>Valor: 200 trocados</td>
							<td align="right"><input class="abutton" type="submit" name="btn_vender" value="Vender"/></td></tr>
					</table>
				</td></tr>
				</table>
			</form></div>
			<div class="mainofferbox" align="left"><form action="iniciar_venda.php" name="form_vender" method="post">
				<table>
				<tr><td><img src="img/imagem.png" class=""></td>
				<td>
					<p>Oferta 3</p>
					<p>Cantina</p>
					<input type="hidden" name="txt_cod" value="0"/>
					<input type="hidden" name="txt_valor" value="0"/>
					<p>descri��o haiuhsasuidhasd sbduasbdui ad aisd asd asd asda dasj dasjk das dasm dam,s dasm,d am,sd sm
					sdmamjsaiofb dfgddsajsna sndsjadnas iodsaiosd ns erewqwiwdqwdqwe we qwr qwe ewfw wefwe fewf ewf ewf nd
					wdqwdwa qwe qedqw dw dq dqwq d wdqwdqwdqw d wqdqwd qqdqdqwdqwdqwdqwdqwdqwdqwdqwdwqedwed dwed wedqs</p>
					<table width="100%">
						<tr><td>Quantidade: 0</td><td>Vendidos: 0</td></tr>
						<tr><td>Valor: 0 trocados</td>
							<td align="right"><input class="abutton" type="submit" name="btn_vender" value="Vender"/></td></tr>
					</table>
				</td></tr>
				</table>
			</form></div>
	</div>        

	<!-- Rodap� [X]-->
	<div id="footer" class="container-fluid btn-large btn-success btn-block" style="border:1px solid #000;">
		<div  class="span3">
			&copy; 2012 - All Rights Reserved.
		</div>
		<div class="span2 offset1">
			<a href="contato.html" target="blank" title="Contate-nos" class="btn-success">Contate-nos</a>
		</div>

		<div class="span2">
			<a href="termos.html" target="blank" title="Termos e Pol�ticas" class="btn-success">Termos e Pol�ticas</a>
		</div>

		<div class="span3">
			<a href="levs.php" target="blank" title="Localiza��o dos L.E.V.s" class="btn-success">Localiza��o dos L.E.V.s</a>
		</div>

	</div>
</body>
    
</html>