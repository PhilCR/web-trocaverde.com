<?php
//recebendo dados
$email = $_POST['txt_email'];
$senha = $_POST['txt_senha'];

$mysqli = mysqli_init();	
$mysqli->real_connect('mysql.1freehosting.com', 'u736022732_admin', 'projet02012', 'u736022732_trocavrd');
if (mysqli_connect_errno())
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->real_query ("CALL login('$email','$senha');");

//executando comando
$rs = $mysqli->store_result();

//verifica o numero de linhas do resultado
$num = $mysqli->affected_rows;

if($num == 0) {
	//encerrar conexão
	$mysqli->close();
	
	//redireciona
	header("Location:login_erro.php");
} else {
	
	//recuperando o tipo do usuário
	$rst = $rs->fetch_assoc();
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
		$mysqli->close();
		
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
		$mysqli->close();
		
		//redireciona
		header("Location:pontuador_index.php");
	
	} else if($tipo == "2") {
		$email = $rst["email"];
		$razao_social = $rst["razao_social"];
		$autorizada = $rst["autorizada"];
		
		if($autorizada == "0") {
			$mysqli->close();
			header("Location:loja_esperando.php");
		} else {		
			session_start();
			
			$_SESSION["tipo"]	= $tipo;
			$_SESSION["razao_social"]	= $razao_social;
			$_SESSION["email"]	= $email;
		
			//encerrar conexão
			$mysqli->close();
			
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
		$mysqli->close();
		
		//redireciona
		header("Location:usuario_index.php");
	} else {
		echo "tipo inválido";
		
		//encerrar conexão
		$mysqli->close();
	}
}
?>