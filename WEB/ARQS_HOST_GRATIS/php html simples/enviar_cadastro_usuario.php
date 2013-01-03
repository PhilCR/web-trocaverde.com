<?php
//recebendo dados
$nome = $_POST['txt_nome'];	
$snome = $_POST['txt_snome'];
$tel = $_POST['txt_tel'];
$cel = $_POST['txt_cel'];
$nasc = $_POST['txt_nasc'];	
$email = $_POST['txt_email'];
$pontos = 0;
$cpf = $_POST['txt_cpf'];
$end_rua = $_POST['txt_end_rua'];
$end_num = $_POST['txt_end_num'];
$end_comp = $_POST['txt_end_comp'];
$end_bar = $_POST['txt_end_bar'];
$end_cid = $_POST['txt_end_cid'];
$end_est = $_POST['txt_end_est'];
$end_cep = $_POST['txt_end_cep'];
$senha = $_POST['txt_senha'];

//conectando ao banco de dados
$conn = mysql_connect("localhost", "semcadastro", "cadastro") or die("Impossivel conectar");

//selecionando o BD
if($conn){
	mysql_select_db("trocaverde", $conn);
}

//criando comando sql
$sql = "CALL cadastro_cliente('$nome','$snome','$tel','$cel','$nasc','$email',$pontos,'$cpf','$end_rua','$end_num','$end_comp','$end_bar','$end_cid','$end_est','$end_cep','$senha');";

//executando comando
if(mysql_query($sql, $conn)) {
	echo "sucesso\n";
} else {
	echo "erro: " . mysql_error($conn) . "\n";
}

//encerrar conexão
mysql_close($conn);
?>