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
			<!-- FormulÃ¡rio de LocalizaÃ§Ã£o de Ofertas [X] -->
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
					<a href="termos.php" style="color:#ffffff;"><b>O quê é Troca Verde?</b></a>
				</div>
				<div class="span2 hiden-desktop hiden-tablet visible-phone">
					<a href="termos.php" style="color:#ffffff;"><b>O quê é Troca Verde?</b></a>
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

			<!-- Ãrea de Acesso [X] -->
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

			<!-- Ãrea de Acesso [X] -->
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
	<div id="content" align="justify" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
		<h3>O <font color="00f000">Troca Verde</font> é um sistema onde seu lixo reciclado como desconto para você.</h3>
		<br>
		<br>
		
		<br>
		O lixo reciclável deve ser entregue pelo consumidor nas sacolas padronizadas do Sistema Troca Verde.
		As sacolas padronizadas são totalmente customizadas e tem volume determinado de 50l.
		O consumidor deverá entregar o lixo reciclável não-segregado num único grupo, 
		o número de "Trocados" gerados será resultante de: Índice Troca Verde x Volume de "lixo reciclável" entregue
		<br><br>
		<h4><font color="00f000">Índice Troca Verde</font></h4><br>
		O Índice Troca Verde é calculado da seguinte maneira:<br>
		<b>1</b> - A composição média do lixo reciclável Fonte: CEMPRE - Ciclosoft (2010)<br>
		<b>2</b> - O valor praticado no mercado no mês para o comércio de cada item. Fonte: Pesquisa Mensal de Mercado<br>
		<b>3</b> - Multiplica-se a porcentagem de participação do item na composição do lixo reciclável pelo valor do peso daquele material no mercado no mês<br>
		<b>4</b> - Somam-se todas as multiplicações<br>
		<b>5</b> - O resultado é o Índice Troca Verde<br>
		<br>
		
		<table>
		<tr><td>Item					</td><td>% no lixo reciclável	</td><td>R$ / Kg</td><td>		</td></tr>
		<tr><td>Papel / Papelão			</td><td>39,0%					</td><td>0,3	</td><td>R$0,117</td></tr>
		<tr><td>Metal					</td><td>8,2%					</td><td>6		</td><td>R$0,492</td></tr>
		<tr><td>Alumínio				</td><td>1,0%					</td><td>3		</td><td>R$0,030</td></tr>
		<tr><td>Aço						</td><td>1,8%					</td><td>0,12	</td><td>R$0,002</td></tr>
		<tr><td>Vidro					</td><td>14,0%					</td><td>0,12	</td><td>R$0,017</td></tr>
		<tr><td>Plástico				</td><td>20,0%					</td><td>0,5	</td><td>R$0,100</td></tr>
		<tr><td>PET						</td><td>14,0%					</td><td>0,95	</td><td>R$0,133</td></tr>
		<tr><td>Embalagem Longa Vida	</td><td>2,0%					</td><td>0,49	</td><td>R$0,010</td></tr>
		<tr><td>Índice Troca Verde		</td><td>						</td><td>		</td><td><b>R$0,901</b></td></tr>
		</table>

		<br><br>
		O Índice Troca Verde é atualizado mensalmente.
		
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
 