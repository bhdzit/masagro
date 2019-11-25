<?php
class modelView{

	protected function getModelViews($view){




		$rutesarray=["noticias",
		"informacion",
		"parcelas",
		"parcelasrep",
		"parcelasreg",
		"productores",
		"productoresinfo",
		"inventario",
		"trampas",
		"instalartrampa",
		"inventariotrampas",
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
				case 'logout':
					return 'logout';
				
				default:
					return "404";
				break;
			}
		}
	
	}	
}