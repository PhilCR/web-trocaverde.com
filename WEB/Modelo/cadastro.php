<h1>Formulário de Cadastro de Usuários</h1>

<div class="alert alert-warning">
	<b>Se deseja se cadastrar como loja: <a href="cadastro_loja.php" class="btn-link">clique aqui</a></b>
</div>
	
	<div class="alert alert-info">
	<b>Cadastre-se:</b>
		Preencha o formulário abaixo e seja um trocador!	
		</br>
		<b>Campos com <i class="icon-asterisk"></i> possuem preenchimento obrigatório.</b>
	
 	<form class="row-fluid" action="enviar_cadastro_usuario.php" name="form_cadastro_usuario" method="post">
 		<div class="span3 input-append">
			<h3>Informações de Acesso</h3>
			<input type="email" class="input-large" id="txt_email" name="txt_email" maxlength="70" placeholder="Digite seu Email" required><abbr title="Preencha com seu e-mail padrão no formato email@dominio.ext."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			<input type="password" class="input-large" id="txt_senha" name="txt_senha" maxlength="16" placeholder="Digite sua Senha" required><abbr title="Escolha uma senha de 6 à 16 dígitos. Prefira senha com números e letra, para maior segurança."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			<input type="password" class="input-large" id="txt_re_senha" name="txt_re_senha" maxlength="16" placeholder="Digite novamente sua senha." required><abbr title="Digite novamente a senha escolhida."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
		</div>

		<div class="span5 input-append">
			<h3>Informações Pessoais</h3>
			<input type="text" class="input-medium" id="txt_nome" name="txt_nome" maxlength="50" placeholder="Digite seu Nome" required><abbr title="Insira seu nome." required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			<input type="text" class="input-large" id="txt_sobrenome" name="txt_sobrenome" maxlength="200" placeholder="Digite seu Sobrenome" required><abbr title="Insira seu sobrenome."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			<input type="text" class="input-large" id="txt_cpf" name="txt_cpf" maxlength="14" placeholder="Digite seu C.P.F." required><abbr title="Insira seu CPF com pontos e hífen, ou seja, no formato 999.999.999-00"><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			<input type="text" class="input-small" id="txt_nasc" name="txt_nasc" maxlength="8" placeholder="Data de Nasc." required><abbr title="Insira sua data de Nascimento no formato aaaa/mm/dd"><span class="add-on"><i class="icon-asterisk"></i></span></abbr><label class="text-warning">(aaaa/mm/dd)</label></br>
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
			<div class="span4">
				<button class="btn btn-large" type="button" name="btn_cadastrar">Limpar</button>
			</div>
		</div>

	</form>	

</div>