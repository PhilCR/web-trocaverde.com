<?php
//Inicia a sessão
session_start();

//Elimina os dados da sessão
$tipo = $_SESSION["tipo"];

if($tipo = "3") {
	session_unregister($_SESSION['tipo']);
	session_unregister($_SESSION['nome']);
	session_unregister($_SESSION['snome']);
	session_unregister($_SESSION['email']);
}
 
//Encerra a sessão
session_destroy();

//redireciona
header("Location:index.php");
?>