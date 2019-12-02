<?php
	require_once("../controller/controllerGetParcelas.php");
	$controller= new contreollerGetParcelas();
	$controller->getParcelaInfo($_GET["id"]);
?>