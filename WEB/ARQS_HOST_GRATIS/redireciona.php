<?php
//Verifica se há dados ativos na sessão
if(empty($_SESSION["tipo"])) {
	
} else if($_SESSION["tipo"] == "0") {
	header("Location:admin_index.php");
} else if($_SESSION["tipo"] == "2") {
	header("Location:loja_index.php");
} else if($_SESSION["tipo"] == "1") {
	header("Location:pontuador_index.php");
} else if($_SESSION["tipo"] == "3") {
	header("Location:usuario_index.php");
}

?>