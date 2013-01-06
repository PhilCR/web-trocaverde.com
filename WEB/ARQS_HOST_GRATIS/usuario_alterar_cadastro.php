<?php
//Inclui o arquivo de verificação
include_once("verifica_usuario.php");

session_start();

$mysqli = mysqli_init();	
$mysqli->real_connect('mysql.1freehosting.com', 'u736022732_admin', 'projet02012', 'u736022732_trocavrd');
if (mysqli_connect_errno())
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->real_query ("select *  from cliente where email = '$email'");

//executando comando
$rs = $mysqli->store_result();

$rst = $rs->fetch_assoc();

$nome = $rst["nome"];
$snome = $rst["snome"];
$telefone = $rst["telefone"];
$celular = $rst["celular"];
$data_nasc = $rst["data_nasc"];
$CPF = $rst["CPF"];
$rua = $rst["rua"];
$num = $rst["num"];
$complemento = $rst["complemento"];
$bairro = $rst["bairro"];
$cidade = $rst["cidade"];
$cep = $rst["cep"];
$estado = $rst["estado"];

$mysqli->close();
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
		</script>

    </head>

<body class="container">
	<!-- Cabeçalho [X] -->
	<div id="header" class="container-fluid" style=" background-color:#a0cca0; border:1px solid #000000; border-radius:3px;z-index: 999;">

		<div class="container-fluid">
			<!-- Menu Usuário para Mobile [X] -->
			<div class="span1 visible-phone hidden-desktop hidden-tablet">
				 <div class="span2 hero-unit" style="background-color:#a0ffa0; border-style:solid; border-width:3px; border-color:#000;">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							Olá <b> <?php echo $_SESSION['nome']; ?> </b>
							<button type="submit" class="btn btn-info btn-small">Sair</button></br>
							Saldo: <?php echo $_SESSION['pontos']; ?> trocados
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
				 <div class="span2 hero-unit" style="background-color:#a0ffa0; border-style:solid; border-width:3px; border-color:#000;">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							Olá <b> <?php echo $_SESSION['nome']; ?> </b>
							<button type="submit" class="btn btn-info btn-small">Sair</button></br>
							Saldo: <?php echo $_SESSION['pontos']; ?> trocados
						</div>
					</form>
				</div>                
			</div>

			<!-- Área de Acesso [X] -->
			<div id="login" class="span3 offset3 hidden-desktop visible-tablet hidden-phone">
				<div class="span2 hero-unit" style="background-color:#a0ffa0; border-style:solid; border-width:3px; border-color:#000;">
					<form class="form-horizontal" action="sair.php" name="form_sair" method="post">
						<div class="row-fluid">
							Olá <b> <?php echo $_SESSION['nome']; ?> </b>
							<button type="submit" class="btn btn-info btn-small">Sair</button></br>
							Saldo: <?php echo $_SESSION['pontos']; ?> trocados
						</div>
					</form>
				</div>
			</div>
			
		</div>
    </div>

       
	<!-- Conteudo [X] -->
	<div id="content" align="center" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
		<b>Campos com <i class="icon-asterisk"></i> possuem preenchimento obrigatório.</b>
		<form class="row-fluid" action="enviar_alteracao_user.php" id="form_cadastro_usuario" name="form_cadastro_usuario" method="post">
			<div class="span3 input-append">
				<h3>Informações de Acesso</h3>
				<input type="email" class="input-large" id="txt_email" name="txt_email" maxlength="70" value="<?php echo $email; ?>" required><abbr title="Preencha com seu e-mail padrão no formato email@dominio.ext."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" id="txt_senha" name="txt_senha" maxlength="16" placeholder="Digite sua Senha" required><abbr title="Escolha uma senha de 6 à 16 dígitos. Prefira senha com números e letra, para maior segurança."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="password" class="input-large" id="txt_re_senha" name="txt_re_senha" maxlength="16" placeholder="Digite novamente sua senha" required><abbr title="Digite novamente a senha escolhida."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>

			<div align="left" class="span5 input-append">
				<h3>Informações Pessoais</h3>
				<input type="text" class="input-medium" id="txt_nome" name="txt_nome" maxlength="50" value="<?php echo $nome; ?>" required><abbr title="Insira seu nome." required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="text" class="input-large" id="txt_snome" name="txt_snome" maxlength="200" value="<?php echo $snome; ?>" required><abbr title="Insira seu sobrenome."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
				
			<div align="left" class="span3 input-append">
				<h3>Informações de Contato</h3>
					<abbr title="Insira seu telefone residencial, somente números"><input type="text" class="input-medium" id="txt_tel" name="txt_tel" maxlength="30" value="<?php echo $telefone; ?>"></abbr></br>
					<abbr title="Insira seu telefone, somente números"><input type="text" class="input-medium" id="txt_cel" name="txt_cel" maxlength="30" value="<?php echo $celular; ?>"></abbr></br>
				
					<label>Endereço:</label>
					<input type="text" class="input-xlarge" id="txt_end_rua" name="txt_end_rua" maxlength="100" value="<?php echo $rua; ?>" required><abbr title="Insira seu Logadouro, ou seja, a Rua, Avenida, Estrada e afins do seu endereço."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
					<abbr title="Insira o Número da sua residência."><input type="text" class="input-mini" id="txt_end_num" name="txt_end_num" maxlength="6" value="<?php echo $num; ?>"></abbr>
					<abbr title="Insira o Complemento da sua residência. Ex.: Casa1, Apto. 31, Fundos, etc.."><input type="text" class="input-small" id="txt_end_comp" name="txt_end_comp" maxlength="10" value="<?php echo $complemento; ?>"></abbr></br>
					<input type="text" class="input-medium" id="txt_end_bar" name="txt_end_bar" maxlength="30" value="<?php echo $bairro; ?>" required><abbr title="Insira o Bairro da sua residência."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
					<input type="text" class="input-small" id="txt_end_cep" name="txt_end_cep" maxlength="10" value="<?php echo $cep; ?>" required><abbr title="Insira o CEP da sua residência somente números."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
					<input type="text" class="input-medium" id="txt_end_cid" name="txt_end_cid" maxlength="50" value="<?php echo $cidade; ?>" required><abbr title="Insira a Cidade da sua residência."><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
					<select class="span5" id="txt_end_est" name="txt_end_est" required>
						<option value="<?php echo $estado; ?>" disabled="disabled" selected="selected">Estado</option>
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
			
			<input type="hidden" name="txt_cpf" value="<?php echo $CPF; ?>" />
			<input type="hidden" name="txt_data" value="<?php echo $data_nasc; ?>" />

			<div class="span8">
				<div class="span4">
					<button class="btn btn-large btn-info btn-block" type="submit" name="btn_verificar">Cadastrar</button>
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
