<?php
error_reporting(0);
//Inclui o arquivo de verificação
include_once("verifica_loja.php");

session_start();

$email = $_SESSION["email"];

//conectando ao banco de dados
$conn = mysql_connect("mysql.1freehosting.com", "u736022732_admin", "projet02012") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("u736022732_trocavrd", $conn);
}

//criando comando sql
$sql = "select * from loja where email = '$email';";

//executando comando
$rs = mysql_query($sql, $conn);

$rst = mysql_fetch_array( $rs );

$CNPJ = $rst["CNPJ"];
$razao_social = $rst["razao_social"];
$nome_fantasia = $rst["nome_fantasia"];
$insc_estadual = $rst["nome"];
$rua = $rst["rua"];
$numero = $rst["numero"];
$complemento = $rst["complemento"];
$bairro = $rst["bairro"];
$cidade = $rst["cidade"];
$estado = $rst["estado"];
$cep = $rst["cep"];
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

    </head>

<body class="container">
	<!-- Cabeçalho [X] -->
	<div id="header" class="container-fluid" style=" background-color:#a0cca0; border:1px solid #000000; border-radius:3px;z-index: 999;">

		<div class="container-fluid">
			<!-- Formulário de Localização de Ofertas [X] -->
			<div class="row btn-info" style="background-color:#ffd0a0; color:#ffd0a0; border:1px solid #004400; border-radius:1px;">
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
					Olá <b> <?php echo $_SESSION['razao_social']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
				<div align="right" class="span4 offset1 hiden-desktop visible-tablet hiden-phone">
					Olá <b> <?php echo $_SESSION['razao_social']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
				<div class="span2 hiden-desktop hiden-tablet visible-phone">
					Olá <b> <?php echo $_SESSION['razao_social']; ?></b> | <a href="usuario_alterar_cadastro.php" style="color:#ffffff;">Editar Perfil</a> | <a href="sair.php" style="color:#ffffff;">Sair</a>
				</div>
            </div>

        </div>


		<div class="container-fluid">
		
			<!-- Logotipo [X] -->
			<div class="span4">
				<a href="index.php" ><img src="img/logo.png"></a>
			</div>                			
		</div>
    </div>

       
	<!-- Conteudo [X] -->
	<div id="content" class="container alert alert-info" style="margin-bottom:0px;padding: 0px 0px 0px 0px; min-height: 300px;">
		<b>Campos com <i class="icon-asterisk"></i> possuem preenchimento obrigatório.</b>
		<form class="row-fluid" action="enviar_alteracao_loja.php" name="form_cadastro_loja" method="post">
			<div class="span3 input-append">
				<h3>Informações de Acesso</h3>
				<abbr title="Preencha com seu e-mail padrão no formato email@dominio.ext."><input type="text" class="input-large" name="txt_email" size="50" maxlength="70" value="<?php echo $email ; ?>" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<abbr title="Escolha uma senha de 6 à 16 dígitos. Prefira senha com números e letra, para maior segurança."><input type="password" class="input-large" name="txt_senha" size="50" maxlength="16" placeholder="Digite a Senha" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<abbr title="Digite novamente a senha escolhida."><input type="password" class="input-large" name="txt_re_senha" size="50" maxlength="16" placeholder="Digite novamente sua senha" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			<div align="center" class="span5 input-append">
				<h3>Informações Comerciais</h3>
				<abbr title="Digite o Nome Fantasia"><input type="text" class="input-large" name="txt_nfantasia" size="50" maxlength="200" value="<?php echo $nome_fantasia ; ?>" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<abbr title="Digite a sua Razão Social."><input type="text" class="input-large" name="txt_rsocial" size="50" maxlength="200" value="<?php echo $razao_social ; ?>" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<input type="hidden" class="input-large" name="txt_cnpj" size="50" maxlength="14" value="<?php echo $CNPJ ; ?>" required/><abbr title="Digite o seu CNPJ, somente números.">
				<input type="hidden" class="input-large" name="txt_inscest" size="50" maxlength="50" value="<?php echo $insc_estadual ; ?>" />
			</div>
			<div class="span3 input-append">
				<h3>Informações de Contato</h3>
				<abbr title="Insira seu telefone no formato (00)9999-9999"><input type="text" class="input-large" name="txt_tel" size="50" maxlength="11" value="<?php echo $telefone ; ?>"/></abbr></br>
				<label>Endereço:</label>
				<abbr title="Digite o nome da rua."><input type="text" class="input-large" name="txt_end_rua" size="50" maxlength="200" value="<?php echo $rua ; ?>" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<abbr title="Digite o número."><input type="text" class="input-mini" name="txt_end_num" size="10" maxlength="6" value="<?php echo $numero ; ?>" /></span></abbr>
				<abbr title="Insira o Complemento."><input type="text" class="input-small" name="txt_end_comp" size="30" maxlength="20" value="<?php echo $complemento ; ?>"/></abbr></br>
				<abbr title="Digite onome do seu Bairro."><input type="text" class="input-large" name="txt_end_bar" size="50" maxlength="30" value="<?php echo $bairro ; ?>" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<abbr title="Digite o nome de sua Cidade."><input type="text" class="input-large" name="txt_end_cid" size="50" maxlength="20" value="<?php echo $cidade ; ?>" required/><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
				<select class="span5" id="txt_end_est" name="txt_end_est" required>
						<option value="<?php echo $estado ; ?>" disabled="disabled" selected="selected">Estado</option>
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
					</select><abbr title="Selecione se estado."></abbr>
				<abbr title="Insira o CEP, somente números"><input type="text" class="input-small" name="txt_end_cep" size="50" maxlength="10" value="<?php echo $cep ; ?>" required /><span class="add-on"><i class="icon-asterisk"></i></span></abbr></br>
			</div>
			<div class="span8">
				<div class="span4">
					<button class="btn btn-large btn-info btn-block" type="submit" name="btn_cadastrar">Cadastrar</button>
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