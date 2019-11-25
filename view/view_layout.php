<!DOCTYPE html>
<html>
<?php 	

 include("content/head_js.php");?>

<body>

	<?php
			require_once ("./controller/controllerView.php");
			require_once("./controller/controllerCreateSession.php");
			 $view= new controllerView();
			 $rute=$view->getViewsController();
			 $loaded=new controllerCreateSession();
			 if($rute!="login"&& $rute!="404"&& $rute!="registrarse"){
			 	if(!$loaded->isLoaded()){
			 		header('Location: '.SERVERURL.'');
			 	}
  		 	 include("content/header_view.php");
			 include("./view/content/menu_view.php");
			 require_once($rute);
			 include("./view/content/footer_js.php");
			 
			 
			 }
			 else  {
			 	switch ($rute) {
			 		case 'login':
				 		if($loaded->isLoaded()){
				 			header('Location: '.SERVERURL.'noticias');
				 		}else{
			 			require_once("./view/modulos/login_view.php");
			 			}
			 			break;
			 		case 'registrarse':
			 				require_once("./view/modulos/registrarse_view.php");
			 				break;
			 	
			 			
			 		default:
			 			require_once("./view/modulos/404.php");
			 			break;
			 	}
			 }
	?>

	
	
	</body>
</html>
