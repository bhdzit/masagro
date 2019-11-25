<?php
require ("../model/modelRegisterUser.php");
class controllerRegisterUser {
	public  function setNewUser(){
	//	echo hash('ripemd160', 'IT25697');
		$data=$this->validateUserData();
		$data="{
			\"rfc\":\"".$_POST["rfc"]."\",
			\"business_name\":\"".$_POST["business_name"]."\",
			\"name\":\"".$_POST["name"]."\",
			\"last_name\":\"".$_POST["last_name"]."\",
			\"sec_last_name\":\"".$_POST["sec_last_name"]."\",
			\"phone\":\"".$_POST["phone"]."\",
			\"mail\":\"".$_POST["mail"]."\",
			\"role\":\"".$_POST["role"]."\",
			\"password\":\"".$_POST["password"]."\",
			\"sec_password\":\"".$_POST["sec_password"]."\"}";
		//var_dump(json_decode($data));
		$model=new modelRegisterUser();
		$model->setNewUser(json_decode($data)); 
	}
	public function validateUserData(){

		$json="{";
		if(strlen($_POST["rfc"])==12){
			$json+="\"rfc\":".$_POST["rfc"];
		}

		$json+="}";
	}

}