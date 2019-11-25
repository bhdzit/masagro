<?php
require_once "./core/db.php";
class modelCoInfo extends db{
	public function getcoInfo(){
		$db=new db();
			session_name("login_sesion");
			session_start();
		$res=db::getQuery("select * from `ma_user_info` where ma_usu_rfc=\"".$_SESSION["usu"]."\";");
		return $res;
	}
}
