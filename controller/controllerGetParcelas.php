<?php
require("../model/modelGetParelas.php");
	class contreollerGetParcelas{

		public function getParcelas($id){
			$model= new  modelGetParcelas();
			if($id=="*"){
			$res=$model->getAllParcelas();
			}
			else{
			$res=$model->getProdutorParcela($id);
			}
			while($parcela=$res->fetch_assoc()) {
					if($i!=$parcela["ma_parce_id"]){
						echo ";";
							echo($parcela["ST_X(ma_parce_ubi_point)"].",".$parcela["ST_Y(ma_parce_ubi_point)"].",".$parcela["ma_parce_id"].",");

						$i=$parcela["ma_parce_id"];
					}
					else{
						echo($parcela["ST_X(ma_parce_ubi_point)"].",".$parcela["ST_Y(ma_parce_ubi_point)"].",".$parcela["ma_parce_id"].",");
					}
				}		
			
		}

		public function getParcelaInfo($id){
			$model= new  modelGetParcelas();
			$res=$model-> getParcelaInfo($id);
			echo $res["ma_parce_id"].", ".$res["ma_parce_name"].",".$res["ma_parce_surface"];
		}
		public function getParcelasReport($id){
			$model=new modelGetParcelas();
			if($id=="*"){
				echo "adasd";
				$res=$model->getParcelasReport();
				//var_dump($res);	
			}
			else{
			$res=$model->getParceProduReport($id);
			//var_dump($res);
			}
#var_dump($res);
			while ($parcela=$res->fetch_assoc()) {
		
		echo $parcela["ma_parce_id"].",".$parcela["ma_parce_name"].",".$parcela["ma_usu_business_name"].",".$parcela["ma_parce_surface"].";";
			//	var_dump($parcela);
			}
		}


	}
?>