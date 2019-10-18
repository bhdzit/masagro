<!DOCTYPE html>
<html>
<?php 	 include("content/head_js.php");?>
<body>

	<?php 	 include("content/header_view.php");?>

	<?php
			require_once ("./controller/controllerView.php");
			 $view= new controllerView();
			 $rute=$view->getViewsController();
			 if($rute!="login"&& $rute!="404"){

			 include("./view/content/menu_view.php");
			require_once($rute);
			 }else  if($rute=="404"){

			 	include("./view/modulos/404.php");
			 }
			 else{
			 	
			 	include("./view/modulos/login_view.php");
				}
	?>

	
	
	</body>
</html>
