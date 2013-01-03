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
	<div id="content" align="center" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 450px;">
		<div class="btn-group">
			<button class="btn btn-info btn-large" name="btn_usuario" value="Cadastro de Usuário" onclick="mostrar('div_u')"/>Cadastro de Usuário</button>
			<button class="btn btn-info btn-large" name="btn_loja" value="Cadastro de Loja" onclick="mostrar('div_l')"/>Cadastro de Loja</button>
		</div>

		<div id="div_l" style="display:none;">
		<b>Campos com <i class="icon-asterisk"></i> possuem preenchimento obrigatório.</b>
		<form class="row-fluid" action="enviar_cadastro_loja.php" name="form_cadastro_loja" method="post">
			<div class="span3 input-append">
				<h3>Informações de Acesso</h3>
				<input type="text" class="input-large" name="txt_email" size="50" maxlength="70" placeholder="Digite o Email" required/><abbr title="Preencha com seu e-mail padrão no formato email@dominio.ext."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" name="txt_senha" size="50" maxlength="16" placeholder="Digite a Senha" required/><abbr title="Escolha uma senha de 6 à 16 dígitos. Prefira senha com números e letra, para maior segurança."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" name="txt_re_senha" size="50" maxlength="16" placeholder="Digite novamente sua senha" required/><abbr title="Digite novamente a senha escolhida."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			<div class="span5 input-append">
				<h3>Informações Comerciais</h3>
				<input type="text" class="input-large" name="txt_nfantasia" size="50" maxlength="200" placeholder="Digite o Nome Fantasia" required/><abbr title="Digite o Nome Fantasia"><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_rsocial" size="50" maxlength="200" placeholder="Digite a Razão Social" required/><abbr title="Digite a sua Razão Social."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_cnpj" size="50" maxlength="14" placeholder="Digite o CNPJ" required/><abbr title="Digite o seu CNPJ."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_inscest" size="50" maxlength="50" placeholder="Digite a Inscrição Estadual" required/><abbr title="Digite o número de sua Inscrição Estadual."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			<div class="span3 input-append">
				<h3>Informações de Contato</h3>
				<abbr title="Insira seu telefone no formato (00)9999-9999"><input type="text" class="input-large" name="txt_tel" size="50" maxlength="11" placeholder="Digite o Telefone"/></abbr></br>
				<label>Endereço:</label>
				<input type="text" class="input-large" name="txt_end_rua" size="50" maxlength="200" placeholder="Digite a Rua" required/><abbr title="Digite o nome da rua."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-mini" name="txt_end_num" size="10" maxlength="6" placeholder="Digite o Número" required/><abbr title="Digite o número."><span class="add-on"><i class="icon-asterisk"></i></span></abbr>
				<abbr title="Insira o Complemento."><input type="text" class="input-small" name="txt_end_comp" size="30" maxlength="20" placeholder="Digite o Complemento"/></abbr></br>
				<input type="text" class="input-large" name="txt_end_bar" size="50" maxlength="30" placeholder="Digite o Bairro" required/><abbr title="Digite onome do seu Bairro."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_end_cid" size="50" maxlength="20" placeholder="Digite a Cidade" required/><abbr title="Digite o nome de sua Cidade."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<select class="span5" id="txt_end_est">
					<option>Estado:</option>
				</select>
				<abbr title="Insira o CEP da sua residência no formato 99.999-999."><input type="text" class="input-small" name="txt_end_cep" size="50" maxlength="10" placeholder="Digite o CEP"/></abbr></br>
			</div>
			<div class="span8">
				<div class="span4">
					<button class="btn btn-large btn-info btn-block" type="submit" name="btn_cadastrar">Cadastrar</button>
				</div>
			</div>

		</form>
		</div>

		<div id="div_u" style="display:none;">
		<b>Campos com <i class="icon-asterisk"></i> possuem preenchimento obrigatório.</b>
		<form class="row-fluid" action="enviar_cadastro_usuario.php" name="form_cadastro_usuario" method="post">
			<div class="span3 input-append">
				<h3>Informações de Acesso</h3>
				<input type="email" class="input-large" id="txt_email" name="txt_email" maxlength="70" placeholder="Digite seu Email" required><abbr title="Preencha com seu e-mail padrão no formato email@dominio.ext."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" id="txt_senha" name="txt_senha" maxlength="16" placeholder="Digite sua Senha" required><abbr title="Escolha uma senha de 6 à 16 dígitos. Prefira senha com números e letra, para maior segurança."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" id="txt_re_senha" name="txt_re_senha" maxlength="16" placeholder="Digite novamente sua senha" required><abbr title="Digite novamente a senha escolhida."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>

			<div class="span5 input-append">
				<h3>Informações Pessoais</h3>
				<input type="text" class="input-medium" id="txt_nome" name="txt_nome" maxlength="50" placeholder="Digite seu Nome" required><abbr title="Insira seu nome." required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" id="txt_sobrenome" name="txt_sobrenome" maxlength="200" placeholder="Digite seu Sobrenome" required><abbr title="Insira seu sobrenome."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" id="txt_cpf" name="txt_cpf" maxlength="14" placeholder="Digite seu C.P.F." required><abbr title="Insira seu CPF com pontos e hífen, ou seja, no formato 999.999.999-00"><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-small" id="txt_nasc" name="txt_nasc" maxlength="8" placeholder="Data de Nasc." required><abbr title="Insira sua data de Nascimento no formato aaaa/mm/dd"><span class="add-on"><i class="icon-asterisk"></i></span></abbr><label class="text-warning">(aaa/mm/dd)</label></br>
			</div>

			<div class="content input-append">
				<h3>Informações de Contato</h3>
				<div class="span3">
					<abbr title="Insira seu telefone residencial no formato (00)9999-9999"><input type="text" class="input-medium" id="txt_telefone" name="txt_telefone" maxlength="30" placeholder="Digite seu Telefone Residencial"></abbr></br>
					<abbr title="Insira seu telefone celular no formato (00)9999-9999"><input type="text" class="input-medium" id="txt_celular" name="txt_celular" maxlength="30" placeholder="Digite seu Telefone Celular"></abbr></br>
				</div>
				
				<div class="span3">
					<label>Endereço:</label>
					<abbr title="Insira seu Logadouro, ou seja, a Rua, Avenida, Estrada e afins do seu endereço."><input type="text" class="input-xlarge" id="txt_end_rua" name="txt_end_rua" maxlength="100" placeholder="Digite seu Logadouro"></abbr></br>
					<abbr title="Insira o Número da sua residência."><input type="text" class="input-mini" id="txt_end_num" name="txt_end_num" maxlength="6" placeholder="Número"></abbr>
					<abbr title="Insira o Complemento da sua residência. Ex.: Casa1, Apto. 31, Fundos, etc.."><input type="text" class="input-small" id="txt_endcomplemento" name="txt_endcomplemento" maxlength="10" placeholder="Complemento"></abbr></br>
					<abbr title="Insira o Bairro da sua residência."><input type="text" class="input-medium" id="txt_end_bar" name="txt_end_bar" maxlength="30" placeholder="Bairro"></abbr>
					<abbr title="Insira o CEP da sua residência no formato 99.999-999."><input type="text" class="input-small" id="txt_end_cep" name="txt_end_cep" maxlength="10" placeholder="CEP"></abbr></br>
					<abbr title="Insira a Cidade da sua residência."><input type="text" class="input-medium" id="txt_end_cid" name="txt_end_cid" maxlength="50" placeholder="Cidade"></abbr>
					<select class="span5" id="txt_end_est">
						<option>Estado:</option>
					</select>
				
				</div>
			</div>

			<div class="span8">
				<div class="span4">
					<button class="btn btn-large btn-info btn-block" type="submit" name="btn_cadastrar">Cadastrar</button>
				</div>
			</div>
		</form>
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

