<?php 
 require("../core/db.php");
 class setQuery extends db{
 	public function setSQlQuery($sql){
 		$db= new db();
 		$res=$db::executeQuery($sql);
	//	var_dump($res);
		return $res;
 	
 	}
 }

?>