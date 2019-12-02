<?php
include("../core/db.php");
class modelSetTramp extends db{
	public function setTramp($json)
		{
			$db= new db();
			$sql="insert into  ma_tramp values(null,".
				"\"".$json->{"tramp_date"}."\"".
				",POINT(".$json->{"tramp_lat"}.",".$json->{"tramp_lng"}.")".
				",".$json->{"tramp_prod"}.",1);";
			$bool=db::executeQuery($sql);
			if($bool){
				echo $sql;
			echo "Se Inserto Registro C0rectamente";
		}
		else{
			echo "No se pudo registrar el usuario";
		
		}


		}
		public function getAllTramps(){
			$db=new db();
			$sql="select *,ST_Y(ma_tramp_point), ST_X(ma_tramp_point) from ma_tramp";
			$res=db::executeQuery($sql);
			return $res;
		}
		public function getProdTramps($id){
			$db=new db();
			$sql="select *,ST_Y(ma_tramp_point), ST_X(ma_tramp_point) from ma_tramp  where ma_tramp_usu_id=".$id.";";
			$res=db::executeQuery($sql);
			return $res;
		}

		public function getAllTrampsList(){
		 $res=db::executeQuery(" select ma_tramp_id,ma_tram_status, ma_tramp_date,ST_X( ma_tramp_point),ST_Y( ma_tramp_point),SUM(ma_bc) 
	from ma_tramp
    inner join ma_tramp_status   on `ma_tramp`.ma_tramp_status_id=`ma_tramp_status`.ma_tramp_status_id
    inner join `ma_butterflies_catch` on ma_bc_tramp_id=ma_tramp_id  group by `ma_tramp`.ma_tramp_id ;");
			return $res;
		}

		public function getSelectedTrampLsit($id){
$res=db::executeQuery(" select ma_tramp_id,ma_tram_status, ma_tramp_date,ST_X( ma_tramp_point),ST_Y(ma_tramp_point),SUM(ma_bc)
				from ma_tramp
		    	inner join ma_tramp_status   on `ma_tramp`.ma_tramp_status_id=`ma_tramp_status`.ma_tramp_status_id
		    	inner join `ma_butterflies_catch` on ma_bc_tramp_id=ma_tramp_id where ma_tramp_usu_id=".$id."  group by `ma_tramp`.ma_tramp_id ;");
			return $res;
	
		}

}
?>