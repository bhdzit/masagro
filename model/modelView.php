<?php
class modelView{

	protected function getModelViews($view){
		$rutesarray=["noticias",
		"informacion",
		"productores",
		"productoresinfo",
		"inventario",
		"trampas",
		"usuarios",
		"salir",
		"inventariomap",
		"passwordreset"];
		if(in_array($view,$rutesarray)){
			return "./view/modulos/".$view."_view.php";
		}else{
			switch ($view) {
				case 'registrarse':
					return "registrarse";
					break;
					
				case 'login':
				return "login";
				break;
				
				default:
					return "404";
				break;
			}
		}
	
	}	
}