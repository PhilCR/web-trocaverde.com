<?php
//recebendo dados
$nome = $_POST['txt_nome'];
$snome = $_POST['txt_snome'];
$tel = $_POST['txt_tel'];
$email = $_POST['txt_email'];
$senha = $_POST['txt_senha'];

//conectando ao banco de dados
$conn = mysql_connect("localhost", "admin", "projet02012") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("trocaverde", $conn);
}

//criando comando sql
$sql = "CALL cadastro_pontuador('$nome','$snome','$tel','$email','$senha');";

//executando comando
if(mysql_query($sql, $conn)) {
	echo "sucesso\n";
} else {
	echo "erro: " . mysql_error($conn) . "\n";
}

//encerrar conexão
mysql_close($conn);
?>