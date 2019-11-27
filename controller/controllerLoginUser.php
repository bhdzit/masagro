<?php
	require_once("../model/modelLoginUser.php");
	require_once("../controller/controllerCreateSession.php");
	class controllerLoginUser{
		public function checkCredentials(){

		$model= new modelLoginUser();
		if($res=$model->checkCredentials()){	
		$sess=new controllerCreateSession();
		$sess->createSession("login_sesion");
		$sess->setValue("usu",$_POST["usu"]);
		$sess->setValue("pass",$_POST["pass"]);
		$sess->setValue("role",$res["ma_usu_role_name"]);
		echo "1";
		}
		else{
			echo "2";
		}
		
		
		}

	

	}
?>