<?php
require("../model/modelUpdateProductorInfo.php");
class controllerUpdateProductorInfo{

	public function updateProductoresInfo(){
		$data="{\"info_id\":\"".$_POST["info_id"].
			"\",\"info_rfc\":\"".$_POST["prod_rfc"].
			"\",\"info_business_name\":\"".$_POST["prod_business_name"].
			"\",\"info_name\":\"".$_POST["prod_name"].
			"\",\"info_last_name\":\"".$_POST["prod_last_name"].
			"\",\"info_sec_last_name\":\"".$_POST["prod_sec_last_name"].
			"\",\"info_mail\":\"".$_POST["prod_mail"].
			"\",\"info_tel\":".$_POST["prod_tel"]."}";
			
			$model=new modelUpdateProductorInfo();
			//echo $data;
			//echo var_dump(json_decode($data));
			$model->updateProductorInfo(json_decode($data));
	}
}