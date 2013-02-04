<?php
//error_reporting(0);
//Inicia a sessão
session_start();

//Elimina os dados da sessão
$tipo = $_SESSION["tipo"];

if($tipo = "3") {
	session_destroy($_SESSION['tipo']);
	session_destroy($_SESSION['nome']);
	session_destroy($_SESSION['snome']);
	session_destroy($_SESSION['email']);
	
} else if($tipo = "2") {
	session_destroy($_SESSION['tipo']);
	session_destroy($_SESSION['razao_social']);
	session_destroy($_SESSION['email']);
} else if($tipo = "1") {
	session_destroy($_SESSION['tipo']);
	session_destroy($_SESSION['nome']);
	session_destroy($_SESSION['snome']);
	session_destroy($_SESSION['email']);
} else if($tipo = "0") {
	session_destroy($_SESSION['tipo']);
	session_destroy($_SESSION['nome']);
	session_destroy($_SESSION['snome']);
	session_destroy($_SESSION['email']);
}
 
//Encerra a sessão
session_destroy();

//redireciona
header("Location:index.php");
?>