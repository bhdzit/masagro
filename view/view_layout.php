<!DOCTYPE html>
<html>
<?php 	 include("content/head_js.php");?>
<body>

	<?php 	 include("content/header_view.php");?>

	<?php
			require_once ("./controller/controllerView.php");
			 $view= new controllerView();
			 $rute=$view->getViewsController();
			 echo $rute;
			 if($rute!="login"&& $rute!="404"&& $rute!="registrarse"){

			 include("./view/content/menu_view.php");
			 require_once($rute);
			 
			 }else  {
			 	switch ($rute) {
			 		case 'login':
			 			require_once("./view/modulos/login_view.php");
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
