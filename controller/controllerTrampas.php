<?php
	include("../model/modelSetTramp.php");
class controllerTrampas{

	public function setTramp(){
		$data="{".
		"\"tramp_lat\":\"".$_POST["tramp_lat"]."\",".
		"\"tramp_lng\":\"".$_POST["tramp_lng"]."\",".
		"\"tramp_date\":\"".$_POST["tramp_date"]."\",".
		"\"tramp_prod\":\"".$_POST["prod_sel"]."\"".
		"}";
//		echo $data;
		$model= new modelSetTramp();
		$model->setTramp(json_decode($data));
	//var_dump(json_decode($data));

	}
	public function getTramps($id){
		$model=new modelSetTramp();
		if($id=="*"){
			$res=$model->getAllTramps();
		}
		else{
			$res=$model->getProdTramps($id);
		}

		while ($tramp=$res->fetch_assoc()) {
				echo $tramp["ma_tramp_id"].",".$tramp["ma_tramp_date"].",".$tramp["ST_Y(ma_tramp_point)"].",".$tramp["ST_X(ma_tramp_point)"].";";
			# code...
		}

	}
	public function getTrampsList($id){
		$model= new modelSetTramp();
		if($id=="*"){
		$res=$model->getAllTrampsList();

		}
		else{
			$res=$model->getSelectedTrampLsit($id);
		}
			while ($tramp=$res->fetch_assoc()) {
				//var_dump($tramp);
				echo $tramp["ma_tramp_id"].",".$tramp["ma_tramp_date"].",".$tramp["ma_tram_status"].",".$tramp["ST_X( ma_tramp_point)"].",".$tramp["ST_Y( ma_tramp_point)"].",".$tramp["SUM(ma_bc)"].";";
			# code...
		}
	}
	public function getSelectedTramp($id){
		$model= new modelSetTramp();
		$res=$model->getSelectedTramp($id);
	
	}
}
?>