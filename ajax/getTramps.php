<?php
include("../controller/controllerTrampas.php");
$controller = new controllerTrampas();
$controller->getTramps($_GET["id"]);
?>