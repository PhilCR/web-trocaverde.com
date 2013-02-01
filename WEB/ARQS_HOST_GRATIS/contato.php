<!DOCTYPE html>

<html lang="en">
    <head>
        <title>TrocaVerde.com - Seu lixo reciclado como desconto para voc�!</title> 

        <!-- Metas descritivas -->
        <meta name="description" content="Site de compras coletivas utilizando pontos para obten��o de descontos." />
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

        <!-- Habilitar Scripts Pr�prios -->
        <script type="text/javascript" src="js/troca.js"></script>

    </head>

<body class="container">
	<!-- Cabe�alho [X] -->
	<div id="header" class="container-fluid" style=" background-color:#a0cca0; border:1px solid #000000; border-radius:3px;z-index: 999;">

		<div class="container-fluid">
			<!-- Formulário de Localização de Ofertas [X] -->
			<div class="row btn-info" style="border:1px solid #004400; border-radius:1px;">
				<div class="span1">
					<a href="index.php" style="color:#ffffff;"><b>Home</b></a>
				</div>
				<div class="span2 offset2 hidden-desktop visible-tablet hidden-phone" align="center">

				</div>
				<div class="span2 offset3 visible-desktop hidden-tablet hidden-phone" align="center">

				</div>
				<div class="span2 hiden-desktop hiden-tablet visible-phone">

				</div>
				<div align="right" class="span4 offset1 visible-desktop visible-tablet hidden-phone">
					<a href="termos.php" style="color:#ffffff;"><b>O qu� � Troca Verde?</b></a>
				</div>
				<div class="span2 hiden-desktop hiden-tablet visible-phone">
					<a href="termos.php" style="color:#ffffff;"><b>O qu� � Troca Verde?</b></a>
				</div>
            </div>

			<div align="center" class="span1 visible-phone hidden-desktop hidden-tablet">
				<div class="span2">
					</br>
					<form class="form-horizontal" action="autenticar.php" name="form_login" method="post" disabled>
						<div class="input-append">
							<input class="input-large" type="text" name="txt_email" placeholder="Digite seu Email">
							<span class="add-on"><i class="icon-envelope"></i></span>
						</div>
						<div class="input-append">
							<input class="input-large" type="password" name="txt_senha" placeholder="Digite sua Senha">
							<span class="add-on"><i class="icon-lock"></i></span>
						</div>
						<div class="row-fluid">
							<label class="checkbox">
								<input type="checkbox"> Lembrar-me
							</label> 
							<button type="submit" class="btn btn-info btn-small">Acesso</button>
							<button type="button" class="btn btn-small" onclick=location.href='cadastro.php'>Cadastro</button>
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
				 <div class="span2">
					<form class="form-horizontal" action="autenticar.php" name="form_login" method="post" disabled>
						<div class="input-append">
							<input class="input-medium" type="text" name="txt_email" placeholder="Digite seu Email">
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
							<button type="submit" class="btn btn-info btn-small">Acesso</button>
							<button type="button" class="btn btn-small" onclick=location.href='cadastro.php'>Cadastro</button>
						</div>
					</form>
				</div>                
			</div>

			<!-- Área de Acesso [X] -->
			<div id="login" class="span3 offset3 hidden-desktop visible-tablet hidden-phone">
				<div class="span2">
					<form class="form-horizontal" action="autenticar.php" name="form_login" method="post" disabled>
						<div class="input-append">
							<input class="input-medium" type="text" name="txt_email" placeholder="Digite seu Email">
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
							<button type="submit" class="btn btn-info btn-small">Acesso</button>
							<button type="button" class="btn btn-small" onclick=location.href='cadastro.php'>Cadastro</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
    </div>
       
	<!-- Conteudo [X] -->
	<div id="content" align="center" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
		<h3>Para d�vidas e sugest�es, contate-nos:</h3>
		<h6>Almir Kazunari Okato - kazunar2@gmail.com</h6>
		<h6>Jadder Bismarck de Sousa Cruz - bismarck.sc@gmail.com</h6>
		<h6>Jonas Messias dos Santos - jonas.jmsantos@gmail.com</h6>
		<h6>Jo�o Eduardo Brandes Luiz - jaodaufscar@gmail.com</h6>
		<h6>Philippe C�sar Ramos - philippe.cesar.ramos@gmail.com</h6>
	</div>        

	<!-- Rodap� [X]-->
	<div id="footer" class="container-fluid btn-large btn-success btn-block" style="border:1px solid #000;">
		<div  class="span3">
			&copy; 2012 - All Rights Reserved.
		</div>
		<div class="span2 offset1">
			<a href="contato.php" title="Contate-nos" class="btn-success">Contate-nos</a>
		</div>

		<div class="span2">
			<a href="termos.php" title="Termos e Pol�ticas" class="btn-success">Termos e Pol�ticas</a>
		</div>

		<div class="span3">
			<a href="levs.php" title="Localiza��o dos L.E.V.s" class="btn-success">Localiza��o dos L.E.V.s</a>
		</div>

	</div>
</body>
    
</html>
 