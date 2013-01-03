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
				<div class="btn-group">
					 <div class="span2">
						<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
							<div class="row-fluid">
								<p align="right">Olá <?php echo $_SESSION['nome']; ?>
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
							<p align="right">Olá <?php echo $_SESSION['nome']; ?>
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
							<p align="right">Olá <?php echo $_SESSION['nome']; ?>
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
	<div id="content" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px;">
		<p>
			<input class="bigbutton" type="button" name="btn_pontuador" value="Cadastro de Pontuador" onclick="mostrar('div_p')"/>
			<input class="bigbutton" type="button" name="btn_admin" value="Cadastro de Administrador" onclick="mostrar('div_a')"/>
		</p>
		
		<div id="div_p" style="display:none;"><form action="enviar_cadastro_pontuador.php" name="form_cadastro_pontuador" method="post">
			<p>Cadastro de Pontuador</p>
			<table>
				<tr><td>Nome:</td><td><input type="text" name="txt_nome" size="50" maxlength="200"/></td></tr>
				<tr><td>Sobrenome:</td><td><input type="text" name="txt_snome" size="50" maxlength="50"/></td></tr>
				<tr><td>E-mail:</td><td><input type="text" name="txt_email" size="50" maxlength="70"/></td></tr>
				<tr><td>Senha:</td><td><input type="password" name="txt_senha" size="50" maxlength="16"/></td></tr>
				<tr><td>Repita a senha:</td><td><input type="password" name="txt_re_senha" size="50" maxlength="16"/></td></tr>
				<tr><td>Telefone:</td><td><input type="text" name="txt_tel" size="50" maxlength="11"/></td></tr>
				<tr><td></td><td align="right"><input class="abutton" type="submit" name="btn_cadastrar" value="Cadastrar"/></td></tr>
			</table>
		</form></div>

		<div id="div_a" style="display:none;"><form action="enviar_cadastro_admin.php" name="form_cadastro_admin" method="post">
			<p>Cadastro de Administrador</p>
			<table>
				<tr><td>Nome:</td><td><input type="text" name="txt_nome" size="50" maxlength="200"/></td></tr>
				<tr><td>Sobrenome:</td><td><input type="text" name="txt_snome" size="50" maxlength="50"/></td></tr>
				<tr><td>E-mail:</td><td><input type="text" name="txt_email" size="50" maxlength="70"/></td></tr>
				<tr><td>Senha:</td><td><input type="password" name="txt_senha" size="50" maxlength="16"/></td></tr>
				<tr><td>Repita a senha:</td><td><input type="password" name="txt_re_senha" size="50" maxlength="16"/></td></tr>
				<tr><td>Telefone:</td><td><input type="text" name="txt_tel" size="50" maxlength="11"/></td></tr>
				<tr><td></td><td align="right"><input class="abutton" type="submit" name="btn_cadastrar" value="Cadastrar"/></td></tr>
			</table>
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