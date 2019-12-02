<?php
require	("../model/modelUserInfo.php");
	class controllerUserInfo{
		public function getUserInfo($id){
			$model=new modelUserInfo(); 
			if($id=="*"){
				$res=$model->getAllUser();
			}
			else{
				$res=$model->getSelctedUser($id);
		
			}
			while ($user=$res->fetch_assoc()) {
				echo $user["ma_usu_rfc"].",".
				$user["ma_usu_role_name"].",".
				$user["ma_usu_business_name"].",".
				$user["ma_usu_name"]." ".
				$user["ma_usu_last_name"]." ".
				$user["ma_usu_sec_last_name"].",".
				$user["ma_usu_mail"].				
				";";
			
			}
		}
	
	}
?>