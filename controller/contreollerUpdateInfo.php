<?php
require("../model/modelUpdateInfo.php");
class controllerUpdateInfo{
	function updateInfo(){
		$data="{\"info_business_name\":\"".$_POST["info_business_name"].
		"\",\"id_info\":\"".$_POST["info_id"].
		"\",\"info_mail\":\"".$_POST["info_mail"].
		"\",\"info_phone\":\"".$_POST["info_phone"]."\"}";

		$model= new modelUpdateInfo();
		$model->updateInfo(json_decode($data));
	}
} 
	

