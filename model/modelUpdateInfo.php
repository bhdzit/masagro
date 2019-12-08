<?php
require_once("../core/db.php");
class modelUpdateInfo extends db{

	public function updateInfo($json){
				
				$db=new db();
				$sql="update `ma_user_info` set ".
				"ma_usu_business_name=\"".$json->{"info_business_name"}.
				"\",ma_usu_tel=\"".$json->{"info_phone"}.
				"\", ma_usu_mail=\"".$json->{"info_mail"}.
				"\" where ma_user_id=\"".$json->{"id_info"}."\";";
$bool=$db::executeQuery($sql);
				if($bool){
					//echo $bool;
					echo $sql."Se Actualizo Registro Corectamente";
				}
				else{
					echo $sql;
				}
		}
	}
