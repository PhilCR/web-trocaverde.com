<?php
//Inicia a sess�o
session_start();
 
//Verifica se h� dados ativos na sess�o
if(empty($_SESSION["tipo"])) {
	//Caso n�o exista dados registrados, exige login
	header("Location:login_requirido.php");
//verifica se � um usuario
} else if($_SESSION["tipo"] != "3") {
	header("Location:area_usuario.php");
}

?>