<?php
require_once("../core/db.php");
class modelLoginUser extends db{
	public function checkCredentials(){
			$db= new db();
			$query="select ma_usu_rfc,ma_usu_pass,ma_usu_rolse_role from `ma_user_info` inner join `ma_user_roles` on ma_usu_rfc=\"".$_POST["usu"]."\" AND `ma_usu_pass`=\"".$_POST["pass"]."\" AND ma_user_id=ma_usu_roles_id;";
			$res=$db::getQuery($query);
			if(!$res==null){
				return $res;
			}
			else{
				return false;
			}


	}
}
?>