<?php

	require_once("../controller/controllerGetParcelas.php");
	$controller= new contreollerGetParcelas();
	$controller->getParcelas($_GET["id"]);

?>