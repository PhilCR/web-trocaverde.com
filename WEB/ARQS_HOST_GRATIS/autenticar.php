<?php
error_reporting(0);
//recebendo dados
$email = $_POST['txt_email'];
$senha = $_POST['txt_senha'];

//conectando ao banco de dados
$conn = mysql_connect("mysql.1freehosting.com", "u736022732_admin", "projet02012") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("u736022732_trocavrd", $conn);
}

//criando comando sql
$sql = "CALL login('$email','$senha');";

//executando comando
$rs = mysql_query($sql, $conn);

//verifica o numero de linhas do resultado
$num = mysql_num_rows($rs);

if($num == 0) {
	//encerrar conexão
	mysql_close($conn);
	
	//redireciona
	header("Location:login_erro.php");
} else {
	
	//recuperando o tipo do usuário
	$rst = mysql_fetch_array($rs);
	$tipo = $rst["tipo_usuario"];
	
	if($tipo == "0") {
		$nome = $rst["nome"];
		$snome = $rst["snome"];
		$email = $rst["email"];
		
		session_start();
		
		$_SESSION["tipo"]	= $tipo;
		$_SESSION["nome"]	= $nome;
		$_SESSION["snome"]	= $snome;
		$_SESSION["email"]	= $email;
		
		//encerrar conexão
		mysql_close($conn);
		
		//redireciona
		header("Location:admin_index.php");
	
	} else if($tipo == "1") {
		$nome = $rst["nome"];
		$snome = $rst["snome"];
		$email = $rst["email"];
		
		session_start();
		
		$_SESSION["tipo"]	= $tipo;
		$_SESSION["nome"]	= $nome;
		$_SESSION["snome"]	= $snome;
		$_SESSION["email"]	= $email;
		
		//encerrar conexão
		mysql_close($conn);
		
		//redireciona
		header("Location:pontuador_index.php");
	
	} else if($tipo == "2") {
		$email = $rst["email"];
		$razao_social = $rst["razao_social"];
		$autorizada = $rst["autorizada"];
		
		if($autorizada == "0") {
			mysql_close($conn);
			mysql_close($conn2);
			header("Location:loja_esperando.php");
		} else {		
			session_start();
			
			$_SESSION["tipo"]	= $tipo;
			$_SESSION["razao_social"]	= $razao_social;
			$_SESSION["email"]	= $email;
		
			//encerrar conexão
			mysql_close($conn);
			mysql_close($conn2);
			
			//redireciona
			header("Location:loja_index.php");
		}
	
	} else if($tipo == "3") {
		$nome = $rst["nome"];
		$snome = $rst["snome"];
		$email = $rst["email"];
		$pontos = $rst["pontos"];
		
		session_start();
		
		$_SESSION["tipo"]	= $tipo;
		$_SESSION["nome"]	= $nome;
		$_SESSION["snome"]	= $snome;
		$_SESSION["email"]	= $email;
		$_SESSION["pontos"] = $pontos;
		
		//encerrar conexão
		mysql_close($conn);
		
		//redireciona
		header("Location:usuario_index.php");
	} else {
		echo "tipo inválido";
		
		//encerrar conexão
		mysql_close($conn);
	}
}
?>