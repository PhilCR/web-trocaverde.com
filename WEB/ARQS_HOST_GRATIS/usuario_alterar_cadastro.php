<?php
error_reporting(0);
//Inclui o arquivo de verificação
include_once("verifica_usuario.php");

session_start();

$email = $_SESSION["email"];

//conectando ao banco de dados
$conn = mysql_connect("mysql.1freehosting.com", "u736022732_admin", "projet02012") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("u736022732_trocavrd", $conn);
}

//criando comando sql
$sql = "select *  from cliente where email = '$email'";

//executando comando
$rs = mysql_query($sql, $conn);

$rst = mysql_fetch_array( $rs );

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
		<script type="text/javascript" src="js/ValidaRegistro.js"></script>
		
		<script type="text/javascript">
		</script>

    </head>

<body class="container">
	<!-- Cabeçalho [X] -->
	<div id="header" class="container-fluid" style=" background-color:#a0cca0; border:1px solid #000000; border-radius:3px;z-index: 999;">

		<div class="container-fluid">
			<!-- Formulário de Localização de Ofertas [X] -->
			<div class="row btn-info" style="border:1px solid #004400; border-radius:1px;">
				<div class="span1">
					<a href="index.php" style="color:#ffffff;"><b>Home</b></a>
				</div>
				<div class="span2 offset1 hidden-desktop visible-tablet hidden-phone" align="center">

				</div>
				<div class="span2 offset2 visible-desktop hidden-tablet hidden-phone" align="center">

				</div>
				<div class="span2 hiden-desktop hiden-tablet visible-phone">

				</div>
				<div align="right" class="span4 offset1 visible-desktop hidden-tablet hidden-phone">
					Olá <b> <?php echo $_SESSION['nome']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
				<div align="right" class="span4 offset1 hiden-desktop visible-tablet hiden-phone">
					Olá <b> <?php echo $_SESSION['nome']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
				<div class="span2 hiden-desktop hiden-tablet visible-phone">
					Olá <b> <?php echo $_SESSION['nome']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
            </div>

			<!-- Menu Usuário para Mobile [X] -->
			<div class="span1 visible-phone hidden-desktop hidden-tablet">
				 <div align="center"class="span2 btn-large" style="background-color:#a0ffa0; border-style:solid; border-width:3px; border-color:#000;">
						</br>Saldo: <?php echo $_SESSION['pontos']; ?> trocados</br></br>
				</div>                   
            </div>
        </div>


		<div class="container-fluid">
		
			<!-- Logotipo [X] -->
			<div class="span4">
				<a href="index.php" ><img src="img/logo.png"></a>
			</div>                  

			<!-- Área de Acesso [X] -->
			<div id="login" class="span2 offset4 btn-large visible-desktop hidden-tablet hidden-phone" style="background-color:#a0ffa0; border-style:solid; border-width:3px; border-color:#000;">
				Saldo: <?php echo $_SESSION['pontos']; ?> trocados</br>                
			</div>

			<!-- Área de Acesso [X] -->
			<div id="login" class="span2 offset3 btn-large hidden-desktop visible-tablet hidden-phone" style="background-color:#a0ffa0; border-style:solid; border-width:3px; border-color:#000;">
				Saldo: <?php echo $_SESSION['pontos']; ?> trocados</br>                
			</div>
			
		</div>
    </div>

       
	<!-- Conteudo [X] -->
	<div id="content" align="center" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
		<b>Campos com <i class="icon-asterisk"></i> possuem preenchimento obrigatório.</b>
		<form class="row-fluid" action="enviar_alteracao_user.php" name="form_cadastro_usuario" id="form_cadastro_usuario" method="post">
			<div class="span3 input-append">
				<h3>Informações de Acesso</h3>
				<abbr title="Preencha com seu e-mail padrão no formato email@dominio.ext."><input type="email" class="input-large" id="txt_email" name="txt_email" maxlength="70" value="<?php echo $email; ?>" placeholder="Digite seu Email" required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<abbr title="Escolha uma senha de 6 à 16 dígitos. Prefira senha com números e letra, para maior segurança."><input type="password" class="input-large" id="txt_senha" name="txt_senha" maxlength="16" placeholder="Digite sua Senha" required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<abbr title="Digite novamente a senha escolhida."><input type="password" class="input-large" id="txt_re_senha" name="txt_re_senha" maxlength="16" placeholder="Digite novamente sua senha" required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>

			<div class="span5 input-append">
				<h3>Informações Pessoais</h3>
				<abbr title="Insira seu nome." required><input type="text" class="input-large" id="txt_nome" name="txt_nome"  value="<?php echo $nome; ?>" maxlength="50" placeholder="Digite seu Nome" required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<abbr title="Insira seu sobrenome."><input type="text" class="input-large" id="txt_snome" name="txt_snome" value="<?php echo $snome; ?>" maxlength="200" placeholder="Digite seu Sobrenome" required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>				
			</div>

			<div class="content input-append">
				<h3>Informações de Contato</h3>
				<div class="span3">
					<abbr title="Insira seu telefone residencial, somente números"><input type="text" class="input-large" id="txt_tel" value="<?php echo $telefone; ?>" name="txt_tel" maxlength="30" placeholder="Digite seu Telefone Residencial"></abbr></br>
					<abbr title="Insira seu telefone, somente números"><input type="text" class="input-large" id="txt_cel" value="<?php echo $celular; ?>" name="txt_cel" maxlength="30" placeholder="Digite seu Telefone Celular"></abbr></br>
				</div>
				
				<div class="span3">
					<label>Endereço:</label>
					<abbr title="Insira seu Logadouro, ou seja, a Rua, Avenida, Estrada e afins do seu endereço."><input type="text" class="input-large" id="txt_end_rua" name="txt_end_rua" value="<?php echo $rua; ?>" maxlength="100" placeholder="Digite seu Logadouro" required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
					<abbr title="Insira o Número da sua residência."><input type="text" class="input-mini" id="txt_end_num" name="txt_end_num" value="<?php echo $num; ?>" maxlength="6" placeholder="Número"></abbr>
					<abbr title="Insira o Complemento da sua residência. Ex.: Casa1, Apto. 31, Fundos, etc.."><input type="text" class="input-small" id="txt_end_comp" name="txt_end_comp" maxlength="10" placeholder="Complemento" value="<?php echo $complemento; ?>"></abbr></br>
					<abbr title="Insira o Bairro da sua residência."><input type="text" class="input-large" id="txt_end_bar" name="txt_end_bar" value="<?php echo $bairro; ?>" maxlength="30" placeholder="Bairro"required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
					<abbr title="Insira a Cidade da sua residência."><input type="text" class="input-large" id="txt_end_cid" name="txt_end_cid"  value="<?php echo $cidade; ?>" maxlength="50" placeholder="Cidade"required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
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
					</select><abbr title="Selecione se estado."><span class="add-on"><i class="icon-asterisk"></i></span></abbr>
					<abbr title="Insira o CEP da sua residência somente números."><input type="text" class="input-small" id="txt_end_cep" name="txt_end_cep" value="<?php echo $cep; ?>" maxlength="10" placeholder="CEP" required><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				</div>
			</div>
			<input type="hidden" name="txt_cpf" value="<?php echo $CPF; ?>" />
			<input type="hidden" name="txt_data" value="<?php echo $data_nasc; ?>" />

			<div class="span8">
				<div class="span4">
					<input class="btn btn-large btn-info btn-block" type="submit" name="btn_cadastrar2" value="Cadastrar" onclick="validarEditarCli();return false;"/>
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
