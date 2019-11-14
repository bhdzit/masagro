<!DOCTYPE html>
<html>
<?php 	 include("content/head_js.php");?>
<body>

	<?php 	 ?>

	<?php
			require_once ("./controller/controllerView.php");
			 $view= new controllerView();
			 $rute=$view->getViewsController();
			 if($rute!="login"&& $rute!="404"&& $rute!="registrarse"){
  		 	 include("content/header_view.php");
			 include("./view/content/menu_view.php");
			 require_once($rute);
			 include("./view/content/footer_js.php");
			 
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
