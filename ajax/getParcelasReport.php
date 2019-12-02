<?php
	require_once("../controller/controllerGetParcelas.php");
	$controller= new contreollerGetParcelas();
	$controller->getParcelasReport($_GET["id"]);
?>