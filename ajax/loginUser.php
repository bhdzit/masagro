<?php 
	require_once ("../controller/controllerLoginUser.php");
	$log= new controllerLoginUser();
	$log->checkCredentials();
	
 ?>