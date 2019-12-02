<?php
require("./core/db.php");
	class modelgetUserRole extends db{
		public function getUserRole(){
			$res=db::executeQuery("select * from ma_user_roles;");
			return $res;
		}
	}
?>