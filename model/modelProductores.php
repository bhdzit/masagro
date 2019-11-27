<?php
	require("./core/db.php");
	class modelProductores extends db{
		public function getProductoresList(){
			$db=new db();
			session_name("login_sesion");
			session_start();
			$res=db::getQuery("select * from `ma_user_info` where ma_usu_role=2;");
		return $res;
		}

		public function getProductorInfo($productor){
			return $res=db::getQuery("select * from `ma_user_info` where ma_usu_rfc=\"".$productor."\";");
		}

	}