<?php
require	("../core/db.php");
	class modelUserInfo extends db{
		public function getAllUser(){
			#$de= new db();
			$res=db::executeQuery("select * from `ma_user_info` inner join `ma_user_roles`on `ma_user_info`.ma_usu_roles_id=`ma_user_roles`.ma_usu_roles_id;");
		#	$res="a";
			return $res;
		}

		public function getSelctedUser($id){
			$sql="select * from `ma_user_info` inner join `ma_user_roles`on `ma_user_info`.ma_usu_roles_id=`ma_user_roles`.ma_usu_roles_id and `ma_user_info`.ma_usu_roles_id=".$id.";";
			$res=db::executeQuery($sql);
		
			return $res;	
		}
	
	}
?>