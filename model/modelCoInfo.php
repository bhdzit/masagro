<?php
require_once "./core/db.php";
class modelCoInfo{
	public function getcoInfo(){
		$db=new db();
		$res=$db->getQuery("select * from `empresa`;");
		return $res;
	}
}
