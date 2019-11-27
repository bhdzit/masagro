<?php
	require("../core/db.php");
	
	class modelUpdateProductorInfo{
		public function  updateProductorInfo($json){

			$db=new db();
			$sql="update `ma_user_info` set ".
			"ma_usu_rfc=\"".$json->{"info_rfc"}."\",".
			"ma_usu_business_name=\"".$json->{"info_business_name"}."\",".
			"ma_usu_name=\"".$json->{"info_name"}."\",".
			"ma_usu_last_name=\"".$json->{"info_last_name"}."\",".
			"ma_usu_sec_last_name=\"".$json->{"info_sec_last_name"}."\",".
			"ma_usu_mail=\"".$json->{"info_mail"}."\",".
			"ma_usu_tel=\"".$json->{"info_tel"}."\" ".
			"where ma_user_id=\"".$json->{"info_id"}."\";";
			echo ($sql);
		/*	$bool=$db::executeQuery($sql);
				if($bool){
					//echo $bool;
					echo "Se Actualizo Registro Corectamente";
				}
				else{
					echo "No se pudo Actualizar registrar el usuario";

			}*/
		}
	}