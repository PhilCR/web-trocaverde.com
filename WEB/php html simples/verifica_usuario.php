<?php
//Inicia a sessão
session_start();
 
//Verifica se há dados ativos na sessão
if(empty($_SESSION["tipo"])) {
	//Caso não exista dados registrados, exige login
	header("Location:login_requirido.php");
//verifica se é um usuario
} else if($_SESSION["tipo"] != "3") {
	header("Location:area_usuario.php");
}

?>