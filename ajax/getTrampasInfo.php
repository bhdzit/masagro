<?php
	include("../controller/controllerTrampas.php");
	$controller= new controllerTrampas();
	$controller->getTrampsList($_GET["id"]);
	
?>