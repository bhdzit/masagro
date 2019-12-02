<?php
	require("../model/modelParcelas.php");
 class controllerSetParcelas{
 		
 		public function setParcelas(){
 				$data="{\"ma_parce_name\":\"".$_POST["ma_par_name"].
 				"\",\"ma_parce_surface\":\"".$_POST["ma_par_surface"].
 				"\",\"ma_parce_date\":\"".$_POST["ma_par_date"].
 				"\",\"ma_parce_prod_id\":\"".$_POST["ma_par_prod_id"]."\"}";
				$json=json_decode($_POST["ma_par_lat_lon"]);
				


 			$model= new modelParcelas();
 			$model->setParcela(json_decode($data),$json);
// 			$model->setParceUbiation($json);

 		}
 
 }


?>