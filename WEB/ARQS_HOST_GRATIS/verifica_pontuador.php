<?php
error_reporting(0);
//Inicia a sess�o
session_start();
 
//Verifica se h� dados ativos na sess�o
if(empty($_SESSION["tipo"])) {
	//Caso n�o exista dados registrados, exige login
	header("Location:login_requirido.php");
//verifica se � um usuario
} else if($_SESSION["tipo"] != "1") {
	header("Location:area_pontuador.php");
}

?>