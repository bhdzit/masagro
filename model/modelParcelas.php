<?php
require("../core/db.php");
class modelParcelas extends db{
	public function setParcela($json,$latlng){
			$db=new db();
		
		$bool=$db::executeQuery("insert  into `ma_parcelas` values 
			(null,
			'".$json->{"ma_parce_name"}."',
			'".$json->{"ma_parce_surface"}."',
			'".$json->{"ma_parce_date"}."',
			'".$json->{"ma_parce_prod_id"}."');



			");
		if($bool){

			$res = $db::getLastInsertionID();
			foreach ($latlng as $point) {
			
			//echo $res;
$sql="insert into ma_parelas_ubication values(null,POINT(".$point->{"lat"}.", ".$point->{"lng"}."),".$res.");";	
			echo $sql;
			$db::executeQuery($sql);
			}
			echo "Se Inserto Registro Corectamente";
		}
		else{
			echo "No se pudo registrar el usuario";
		}
	}

}
?>