<?php
require("../core/db.php");
	class modelGetParcelas extends db{
		public function getAllParcelas(){
			$db= new db;
			$res=$db::executeQuery("select *,ST_Y(ma_parce_ubi_point),ST_X(ma_parce_ubi_point)from `ma_parcelas`  inner join `ma_parelas_ubication` on `ma_parcelas`.ma_parce_id=`ma_parelas_ubication`.ma_parce_id order by ma_parce_ubi_id");
			return $res;
		}
		
		public function getProdutorParcela($id){
		$db= new db;
			$res=$db::executeQuery("select *,ST_Y(ma_parce_ubi_point),ST_X(ma_parce_ubi_point)from `ma_parcelas`  inner join `ma_parelas_ubication` on `ma_parcelas`.ma_parce_id=`ma_parelas_ubication`.ma_parce_id where ma_parce_prod_id=\"".$id."\"order by ma_parce_ubi_id");
			return $res;
		}
		public function getParcelaInfo($id){
			$db=new db;
			$res=db::getQuery("select * from `ma_parcelas` where ma_parce_id=".$id);
			return $res;

		}
		public function getParcelasReport(){
				$db=new db;
			$res=db::getQuery("select * from `ma_parcelas` inner join `ma_user_info` on ma_user_id=ma_parce_prod_id;");
			return $res;
		}
		public function getParceProduReport($id){
			$db=new db;
			$res=db::executeQuery("select * from `ma_parcelas` inner join `ma_user_info` on ma_user_id=ma_parce_prod_id and ma_user_id=2;");
			return $res;
		}



	}
?>