<?php
require_once("../core/db.php");
class modelRegisterUser extends db{

	public  function setNewUser($json){
		$db=new db();
		$a="sdasdasd";
		$bool=$db::executeQuery("insert into `ma_user_info` 
			values(null,
			'".$json->{"rfc"}."',
			'".$json->{"business_name"}."',
			'".$json->{"name"}."',
			'".$json->{"last_name"}."',
			'".$json->{"sec_last_name"}."',
			'".$json->{"mail"}."',
			'".$json->{"role"}."',
			'".$json->{"password"}."',
			'".$json->{"phone"}."');



			");
		if($bool){
			echo "Se Inserto Registro C0rectamente";
		}
		else
			echo "No se pudo registrar el usuario";
		}

} 