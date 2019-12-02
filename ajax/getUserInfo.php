<?php
include("../controller/controllerUserInfo.php");
$controller=new controllerUserInfo();
$controller->getUserInfo($_GET["id"]);
?>