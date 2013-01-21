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
        <script type="text/javascript" src="js/ValidaRegistro.js"></script>
		
		<script type="text/javascript">
			function mostrar(qual) {
				obj_u = document.getElementById('div_u');
				obj_l = document.getElementById('div_l');
				obj_q = document.getElementById(qual);
		
				obj_u.style.display="none";
				obj_l.style.display="none";
			
				obj_q.style.display="";
			}
			
			function enviar_fisica() {
				var d  = document.getElementById('DateOfBirth_Day');
				var m  = document.getElementById('DateOfBirth_Month');
				var a = document.getElementById('DateOfBirth_Year');
				
				var dia = d.options[d.selectedIndex].value;
				var mes =  m.options[m.selectedIndex].value;
				var ano = a.options[a.selectedIndex].value;
				
				var txt_data = document.getElementById('txt_nasc');
				
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
				<input type="text" class="input-large" name="txt_email" id="email" size="50" maxlength="70" placeholder="Digite o Email" required/><abbr title="Preencha com seu e-mail padrão no formato email@dominio.ext."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" name="txt_senha" id="senha" size="50" maxlength="16" placeholder="Digite a Senha" required/><abbr title="Escolha uma senha de 6 à 16 dígitos. Prefira senha com números e letra, para maior segurança."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" name="txt_re_senha" id="senharep" size="50" maxlength="16" placeholder="Digite novamente sua senha" required/><abbr title="Digite novamente a senha escolhida."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			<div class="span5 input-append">
				<h3>Informações Comerciais</h3>
				<input type="text" class="input-large" name="txt_nfantasia" id="nfantasia" size="50" maxlength="200" placeholder="Digite o Nome Fantasia" required/><abbr title="Digite o Nome Fantasia"><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_rsocial" id="rsocial" size="50" maxlength="200" placeholder="Digite a Razão Social" required/><abbr title="Digite a sua Razão Social."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_cnpj" id="cnpj" size="50" maxlength="14" placeholder="Digite o CNPJ" required/><abbr title="Digite o seu CNPJ, somente números."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<abbr title="Digite o número de sua Inscrição Estadual, somente números."><input type="text" class="input-large" name="txt_inscest" id="insc_est" size="50" maxlength="50" placeholder="Digite a Inscrição Estadual" /></abbr></br>
				<input type="text" class="input-large" name="txt_regiao" id="regiao" size="50" maxlength="100" placeholder="Digite sua região" required/><abbr title="Digite a sua região para que os clientes encontrem facilmente suas ofertas."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			<div class="span3 input-append">
				<h3>Informações de Contato</h3>
				<abbr title="Insira seu telefone"><input type="text" class="input-large" name="txt_tel" id="telefone" size="50" maxlength="11" placeholder="Digite o Telefone"/></abbr></br>
				<label>Endereço:</label>
				<input type="text" class="input-large" name="txt_end_rua" id="rua" size="50" maxlength="200" placeholder="Digite a Rua" required/><abbr title="Digite o nome da rua."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<abbr title="Digite o número."><input type="text" class="input-mini" name="txt_end_num" id="numero" size="10" maxlength="6" placeholder="Digite o Número" /></span></abbr>
				<abbr title="Insira o Complemento."><input type="text" class="input-small" name="txt_end_comp" id="complemento" size="30" maxlength="20" placeholder="Digite o Complemento"/></abbr></br>
				<input type="text" class="input-large" name="txt_end_bar" id="bairro" size="50" maxlength="30" placeholder="Digite o Bairro" required/><abbr title="Digite onome do seu Bairro."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" name="txt_end_cid" id="cidade" size="50" maxlength="20" placeholder="Digite a Cidade" required/><abbr title="Digite o nome de sua Cidade."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<select class="span5" id="txt_end_est" name="txt_end_est" required>
						<option value="" disabled="disabled" selected="selected">Estado</option>
						<option value="AC">Acre</option>
						<option value="AL">Alagoas</option>
						<option value="AM">Amazonas</option>
						<option value="AP">Amapá</option>
						<option value="BA">Bahia</option>
						<option value="CE">Ceará</option>
						<option value="DF">Distrito Federal</option>
						<option value="ES">Espirito Santo</option>
						<option value="GO">Goiás</option>
						<option value="MA">Maranhão</option>
						<option value="MG">Minas Gerais</option>
						<option value="MS">Mato Grosso do Sul</option>
						<option value="MT">Mato Grosso</option>
						<option value="PA">Pará</option>
						<option value="PB">Paraíba</option>
						<option value="PE">Pernambuco</option>
						<option value="PI">Piauí</option>
						<option value="PR">Paraná</option>
						<option value="RJ">Rio de Janeiro</option>
						<option value="RN">Rio Grande do Norte</option>
						<option value="RO">Rondônia</option>
						<option value="RR">Roraima</option>
						<option value="RS">Rio Grande do Sul</option>
						<option value="SC">Santa Catarina</option>
						<option value="SE">Sergipe</option>
						<option value="SP">São Paulo</option>
						<option value="TO">Tocantins</option>
					</select><abbr title="Selecione se estado."></abbr></br>
				<input type="text" class="input-small" name="txt_end_cep" id="cep" size="50" maxlength="10" placeholder="Digite o CEP" required /><abbr title="Insira o CEP, somente números"><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			<div class="span8">
				<div class="span4">
					<button class="btn btn-large btn-info btn-block" type="button" name="btn_cadastrar" onclick="validarCadLoja()" >Cadastrar</button>
                    <button style="display:none;" type="submit" id="btn_cadastrar2" name="btn_cadastrar2"></button>
				</div>
			</div>

		</form>
		</div>

		<div id="div_u" style="display:none;">
		<b>Campos com <i class="icon-asterisk"></i> possuem preenchimento obrigatório.</b>
		<form class="row-fluid" action="enviar_cadastro_usuario.php" id="form_cadastro_usuario" name="form_cadastro_usuario" method="post">
			<div class="span3 input-append">
				<h3>Informações de Acesso</h3>
				<input type="email" class="input-large" id="txt_email" name="txt_email" maxlength="70" placeholder="Digite seu Email" required><abbr title="Preencha com seu e-mail padrão no formato email@dominio.ext."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" id="txt_senha" name="txt_senha" maxlength="16" placeholder="Digite sua Senha" required><abbr title="Escolha uma senha de 6 à 16 dígitos. Prefira senha com números e letra, para maior segurança."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" id="txt_re_senha" name="txt_re_senha" maxlength="16" placeholder="Digite novamente sua senha" required><abbr title="Digite novamente a senha escolhida."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>

			<div class="span5 input-append">
				<h3>Informações Pessoais</h3>
				<input type="text" class="input-medium" id="txt_nome" name="txt_nome" maxlength="50" placeholder="Digite seu Nome" required><abbr title="Insira seu nome." required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" id="txt_snome" name="txt_snome" maxlength="200" placeholder="Digite seu Sobrenome" required><abbr title="Insira seu sobrenome."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" id="txt_cpf" name="txt_cpf" maxlength="14" placeholder="Digite seu C.P.F." required><abbr title="Insira seu CPF, somente números"><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="hidden" class="input-small" id="txt_nasc" name="txt_nasc" maxlength="8" placeholder="Data de Nasc." required>
				<select class="span2"  name="DateOfBirth_Day" id="DateOfBirth_Day">
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
				<select class="span3" name="DateOfBirth_Month" id="DateOfBirth_Month">
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
				<select class="span2" name="DateOfBirth_Year" id="DateOfBirth_Year">
					<option value="" disabled="disabled" selected="selected">Ano</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
					<option value="2010">2010</option>
					<option value="2009">2009</option>
					<option value="2008">2008</option>
					<option value="2007">2007</option>
					<option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
					<option value="2001">2001</option>
					<option value="2000">2000</option>
					<option value="1999">1999</option>
					<option value="1998">1998</option>
					<option value="1997">1997</option>
					<option value="1996">1996</option>
					<option value="1995">1995</option>
					<option value="1994">1994</option>
					<option value="1993">1993</option>
					<option value="1992">1992</option>
					<option value="1991">1991</option>
					<option value="1990">1990</option>
					<option value="1989">1989</option>
					<option value="1988">1988</option>
					<option value="1987">1987</option>
					<option value="1986">1986</option>
					<option value="1985">1985</option>
					<option value="1984">1984</option>
					<option value="1983">1983</option>
					<option value="1982">1982</option>
					<option value="1981">1981</option>
					<option value="1980">1980</option>
					<option value="1979">1979</option>
					<option value="1978">1978</option>
					<option value="1977">1977</option>
					<option value="1976">1976</option>
					<option value="1975">1975</option>
					<option value="1974">1974</option>
					<option value="1973">1973</option>
					<option value="1972">1972</option>
					<option value="1971">1971</option>
					<option value="1970">1970</option>
					<option value="1969">1969</option>
					<option value="1968">1968</option>
					<option value="1967">1967</option>
					<option value="1966">1966</option>
					<option value="1965">1965</option>
					<option value="1964">1964</option>
					<option value="1963">1963</option>
					<option value="1962">1962</option>
					<option value="1961">1961</option>
					<option value="1960">1960</option>
					<option value="1959">1959</option>
					<option value="1958">1958</option>
					<option value="1957">1957</option>
					<option value="1956">1956</option>
					<option value="1955">1955</option>
					<option value="1954">1954</option>
					<option value="1953">1953</option>
					<option value="1952">1952</option>
					<option value="1951">1951</option>
					<option value="1950">1950</option>
				</select><abbr title="Selecione sua data de nascimento"><span class="add-on"><i class="icon-asterisk"></i></span></abbr>				
			</div>

			<div class="content input-append">
				<h3>Informações de Contato</h3>
				<div class="span3">
					<abbr title="Insira seu telefone residencial, somente números"><input type="text" class="input-medium" id="txt_tel" name="txt_tel" maxlength="30" placeholder="Digite seu Telefone Residencial"></abbr></br>
					<abbr title="Insira seu telefone, somente números"><input type="text" class="input-medium" id="txt_cel" name="txt_cel" maxlength="30" placeholder="Digite seu Telefone Celular"></abbr></br>
				</div>
				
				<div class="span3">
					<label>Endereço:</label>
					<input type="text" class="input-xlarge" id="txt_end_rua" name="txt_end_rua" maxlength="100" placeholder="Digite seu Logadouro" required><abbr title="Insira seu Logadouro, ou seja, a Rua, Avenida, Estrada e afins do seu endereço."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
					<abbr title="Insira o Número da sua residência."><input type="text" class="input-mini" id="txt_end_num" name="txt_end_num" maxlength="6" placeholder="Número"></abbr>
					<abbr title="Insira o Complemento da sua residência. Ex.: Casa1, Apto. 31, Fundos, etc.."><input type="text" class="input-small" id="txt_end_comp" name="txt_end_comp" maxlength="10" placeholder="Complemento"></abbr></br>
					<input type="text" class="input-medium" id="txt_end_bar" name="txt_end_bar" maxlength="30" placeholder="Bairro"required><abbr title="Insira o Bairro da sua residência."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
					<input type="text" class="input-small" id="txt_end_cep" name="txt_end_cep" maxlength="10" placeholder="CEP" required><abbr title="Insira o CEP da sua residência somente números."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
					<input type="text" class="input-medium" id="txt_end_cid" name="txt_end_cid" maxlength="50" placeholder="Cidade"required><abbr title="Insira a Cidade da sua residência."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
					<select class="span5" id="txt_end_est" name="txt_end_est" required>
						<option value="" disabled="disabled" selected="selected">Estado</option>
						<option value="AC">Acre</option>
						<option value="AL">Alagoas</option>
						<option value="AM">Amazonas</option>
						<option value="AP">Amapá</option>
						<option value="BA">Bahia</option>
						<option value="CE">Ceará</option>
						<option value="DF">Distrito Federal</option>
						<option value="ES">Espirito Santo</option>
						<option value="GO">Goiás</option>
						<option value="MA">Maranhão</option>
						<option value="MG">Minas Gerais</option>
						<option value="MS">Mato Grosso do Sul</option>
						<option value="MT">Mato Grosso</option>
						<option value="PA">Pará</option>
						<option value="PB">Paraíba</option>
						<option value="PE">Pernambuco</option>
						<option value="PI">Piauí</option>
						<option value="PR">Paraná</option>
						<option value="RJ">Rio de Janeiro</option>
						<option value="RN">Rio Grande do Norte</option>
						<option value="RO">Rondônia</option>
						<option value="RR">Roraima</option>
						<option value="RS">Rio Grande do Sul</option>
						<option value="SC">Santa Catarina</option>
						<option value="SE">Sergipe</option>
						<option value="SP">São Paulo</option>
						<option value="TO">Tocantins</option>
					</select><abbr title="Selecione se estado."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				</div>
			</div>

			<div class="span8">
				<div class="span4">
					<button class="btn btn-large btn-info btn-block" type="button" onclick="validarCadCliente()" name="btn_verificar">Cadastrar</button>
					<button style="display:none;" type="submit" id="btn_cadastrar2" name="btn_cadastrar"></button>
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

