<?php
require_once("../core/db.php");
class modelRegisterUser extends db{

	public  function setNewUser(){

		$db=new db();
		$db::executeQuery("insert into `usuario` values(1002,\"rene\",\"12345\",\"RENE010101010\",\"Rene Bautista\",\"Rene\",\"Ivan\",\"Bautista\",7713814046,\"rene@gmail.com\",1)");
	}

} 