<?php
class modelView{

	protected function getModelViews($view){
		$rutesarray=["noticias","informacion","productores","productoresinfo","inventario","trampas","usuarios","salir","inventariomap","login"];
		if(in_array($view,$rutesarray)){
			return "modulos/".$view."_view.php";
		}else{
			return "404";
		}
	
	}	
}