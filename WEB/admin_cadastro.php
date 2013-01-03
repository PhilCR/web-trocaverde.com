<?php
//Inclui o arquivo de verificação
include_once("verifica_admin.php");

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
			function mostrar(qual) {
				obj_p = document.getElementById('div_p');
				obj_a = document.getElementById('div_a');
				obj_q = document.getElementById(qual);
			
				obj_p.style.display="none";
				obj_a.style.display="none";
				
				obj_q.style.display="";
			}
		</script>

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
			<button class="btn btn-info btn-large" type="button" name="btn_pontuador" value="Cadastro de Pontuador" onclick="mostrar('div_p')">Cadastro de Pontuador</button>
			<button class="btn btn-info btn-large" type="button" name="btn_admin" value="Cadastro de Administrador" onclick="mostrar('div_a')">Cadastro de Administrador</button>
		</div>
		
		<div id="div_p" style="display:none;"><form class="row-fluid" action="enviar_cadastro_pontuador.php" name="form_cadastro_pontuador" method="post">
			<h3>Cadastro de Pontuador</h3>
			<b>Campos com <i class="icon-asterisk"></i> possuem preenchimento obrigatório.</b></br>
			<div class="span5 input-append">
				<h4>Informações de Acesso</h4>
				<input type="text" class="input-large" name="txt_email" size="50" maxlength="70" placeholder="Digite o Email" required/><abbr title="Preencha com o e-mail padrão no formato email@dominio.ext."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" name="txt_senha" size="50" maxlength="16" placeholder="Digite a Senha" required/><abbr title="Escolha uma senha de 6 à 16 dígitos. Prefira senha com números e letra, para maior segurança."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" name="txt_re_senha" size="50" maxlength="16" placeholder="Repita a Senha" required/><abbr title="Digite novamente a senha escolhida."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			<div class="span5 input-append">
				<h4>Informações Pessoais</h4>
				<input type="text" class="input-large" name="txt_nome" size="50" maxlength="200" placeholder="Digite o Nome" required/><abbr title="Insira o nome." required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_snome" size="50" maxlength="50" placeholder="Digite o Sobrenome" required/><abbr title="Insira o sobrenome."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_tel" size="50" maxlength="11" placeholder="Digite o Telefone" required/><abbr title="Insira o telefone, somente números"><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input class="btn btn-info btn-small" type="submit" name="btn_cadastrar" value="Cadastrar"/>
			</div>
		</form></div>

		<div id="div_a" style="display:none;"><form action="enviar_cadastro_admin.php" name="form_cadastro_admin" method="post">
			<h3>Cadastro de Administrador</h3>
			<b>Campos com <i class="icon-asterisk"></i> possuem preenchimento obrigatório.</b></br>
			<div class="span5 input-append">
				<h4>Informações de Acesso</h4>
				<input type="text" class="input-large" name="txt_email" size="50" maxlength="70" placeholder="Digite o Email" required/><abbr title="Preencha com o e-mail padrão no formato email@dominio.ext."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" name="txt_senha" size="50" maxlength="16" placeholder="Digite a Senha" required/><abbr title="Escolha uma senha de 6 à 16 dígitos. Prefira senha com números e letra, para maior segurança."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" name="txt_re_senha" size="50" maxlength="16" placeholder="Repita a Senha" required/><abbr title="Digite novamente a senha escolhida."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			
			<div class="span5 input-append">
				<h4>Informações Pessoais</h4>
				<input type="text" class="input-large" name="txt_nome" size="50" maxlength="200" placeholder="Digite o Nome" required/><abbr title="Insira o nome." required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_snome" size="50" maxlength="50" placeholder="Digite o Sobrenome" required/><abbr title="Escolha uma senha de 6 à 16 dígitos. Prefira senha com números e letra, para maior segurança."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_tel" size="50" maxlength="11" placeholder="Digite o Telefone" required/><abbr title="Insira o telefone, somente números"><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input class="btn btn-info btn-small" type="submit" name="btn_cadastrar" value="Cadastrar"/>
			</div>
		</form></div>
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