<?php
//Inicia a sess�o
session_start();

//Elimina os dados da sess�o
$tipo = $_SESSION["tipo"];

if($tipo = "3") {
	session_unregister($_SESSION['tipo']);
	session_unregister($_SESSION['nome']);
	session_unregister($_SESSION['snome']);
	session_unregister($_SESSION['email']);
}
 
//Encerra a sess�o
session_destroy();

//redireciona
header("Location:index.php");
?>