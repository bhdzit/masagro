<?php
require_once("../core/db.php");
class modelUpdateInfo extends db{

	public function updateInfo($json){
				
				$db=new db();

$bool=$db::executeQuery("update `ma_user_info` set ma_usu_business_name=\"".$json->{"info_business_name"}."\",ma_usu_tel=\"".$json->{"info_phone"}."\" where ma_user_id=2;");
				if($bool){
					//echo $bool;
					echo "Se Actualizo Registro Corectamente";
				}
				else{
					echo "No se pudo Actualizar registrar el usuario";
				}
		}
	}
