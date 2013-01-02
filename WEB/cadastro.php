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
				obj_u = document.getElementById('div_u');
				obj_l = document.getElementById('div_l');
				obj_q = document.getElementById(qual);
		
				obj_u.style.display="none";
				obj_l.style.display="none";
			
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
				<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user icon-white"></i>
					Entrar
					<span class="caret"></span></a>
					
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
						<li>
							 <div class="span2">
								<form class="form-horizontal" action="autenticar.php" name="form_login" method="post">
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
	<div id="content" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px;">
		 <p align=center>
				<input class="bigbutton" type="button" name="btn_usuario" value="Cadastro de Usuário" onclick="mostrar('div_u')"/>
				<input class="bigbutton" type="button" name="btn_loja" value="Cadastro de Loja" onclick="mostrar('div_l')"/>
			</p>
	
			<div id="div_l" style="display:none;"><form action="enviar_cadastro_loja.php" name="form_cadastro_loja" method="post">
				<table>
					<tr><td>Nome Fantasia:</td><td><input type="text" name="txt_nfantasia" size="50" maxlength="200"/></td></tr>
					<tr><td>Razão Social:</td><td><input type="text" name="txt_rsocial" size="50" maxlength="200"/></td></tr>
					<tr><td>E-mail:</td><td><input type="text" name="txt_email" size="50" maxlength="70"/></td></tr>
					<tr><td>Senha:</td><td><input type="password" name="txt_senha" size="50" maxlength="16"/></td></tr>
					<tr><td>Repita a senha:</td><td><input type="password" name="txt_re_senha" size="50" maxlength="16"/></td></tr>
					<tr><td>CNPJ:</td><td><input type="text" name="txt_cnpj" size="50" maxlength="14"/></td></tr>
					<tr><td>Inscrição Estadual:</td><td><input type="text" name="txt_inscest" size="50" maxlength="50"/></td></tr>
					<tr><td>Telefone:</td><td><input type="text" name="txt_tel" size="50" maxlength="11"/></td></tr>
					<tr><td>Endereço</td><td></td></tr>
					<tr><td>Rua:</td><td><input type="text" name="txt_end_rua" size="50" maxlength="200"/></td></tr>
					<tr><td>Número:</td><td><input type="text" name="txt_end_num" size="50" maxlength="6"/></td></tr>
					<tr><td>Complemento:</td><td><input type="text" name="txt_end_comp" size="50" maxlength="20"/></td></tr>
					<tr><td>Bairro:</td><td><input type="text" name="txt_end_bar" size="50" maxlength="30"/></td></tr>
					<tr><td>Cidade:</td><td><input type="text" name="txt_end_cid" size="50" maxlength="20"/></td></tr>
					<tr><td>Estado:</td><td><input type="text" name="txt_end_est" size="50" maxlength="2"/></td></tr>
					<tr><td>CEP:</td><td><input type="text" name="txt_end_cep" size="50" maxlength="10"/></td></tr>
					<tr><td></td><td><input class="abutton" type="submit" name="btn_cadastrar" value="Cadastrar"/></td></tr>
				</table>
			</form></div>

			<div id="div_u" style="display:none;"><form action="enviar_cadastro_usuario.php" name="form_cadastro_usuario" method="post">
				<table>
					<tr><td>Nome:</td><td><input type="text" name="txt_nome" size="50" maxlength="200"/></td></tr>
					<tr><td>Sobrenome:</td><td><input type="text" name="txt_snome" size="50" maxlength="50"/></td></tr>
					<tr><td>E-mail:</td><td><input type="text" name="txt_email" size="50" maxlength="70"/></td></tr>
					<tr><td>Senha:</td><td><input type="password" name="txt_senha" size="50" maxlength="16"/></td></tr>
					<tr><td>Repita a senha:</td><td><input type="password" name="txt_re_senha" size="50" maxlength="16"/></td></tr>
					<tr><td>CPF:</td><td><input type="text" name="txt_cpf" size="50" maxlength="11"/></td></tr>
					<tr><td>Telefone:</td><td><input type="text" name="txt_tel" size="50" maxlength="11"/></td></tr>
					<tr><td>Celular:</td><td><input type="text" name="txt_cel" size="50" maxlength="11"/></td></tr>
					<tr><td>Data de nascimento:</td><td><input type="text" name="txt_nasc" size="50" maxlength="10"/></td></tr>
					<tr><td>Endereço</td><td></td></tr>
					<tr><td>Rua:</td><td><input type="text" name="txt_end_rua" size="50" maxlength="200"/></td></tr>
					<tr><td>Número:</td><td><input type="text" name="txt_end_num" size="50" maxlength="6"/></td></tr>
					<tr><td>Complemento:</td><td><input type="text" name="txt_end_comp" size="50" maxlength="20"/></td></tr>
					<tr><td>Bairro:</td><td><input type="text" name="txt_end_bar" size="50" maxlength="30"/></td></tr>
					<tr><td>Cidade:</td><td><input type="text" name="txt_end_cid" size="50" maxlength="50"/></td></tr>
					<tr><td>Estado:</td><td><input type="text" name="txt_end_est" size="50" maxlength="2"/></td></tr>
					<tr><td>CEP:</td><td><input type="text" name="txt_end_cep" size="50" maxlength="10"/></td></tr>
					<tr><td></td><td><input class="abutton" type="submit" name="btn_cadastrar" value="Cadastrar"/></td></tr>
				<table>
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

