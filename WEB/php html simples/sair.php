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
} else if($tipo = "2") {
	session_unregister($_SESSION['tipo']);
	session_unregister($_SESSION['razao_social']);
	session_unregister($_SESSION['email']);
} else if($tipo = "1") {
	session_unregister($_SESSION['tipo']);
	session_unregister($_SESSION['nome']);
	session_unregister($_SESSION['snome']);
	session_unregister($_SESSION['email']);
} else if($tipo = "0") {
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