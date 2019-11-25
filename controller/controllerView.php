<?php
require_once ("./model/modelView.php");
	require_once("controller/controllerCreateSession.php");
class controllerView extends modelView{

	public function getViewLayout(){
		return require_once("./view/view_layout.php");
	}
	public function getViewsController(){


		if(isset($_GET[views])){
			$route=explode("/",$_GET[views]);
		//	if($route.sizeof()==1){
//			$i=$route.count(var)-1;
			$view=modelView::getModelViews($route[0]);

			if($view=="logout"){
				$sess=new controllerCreateSession();
				$sess->destroySession();
			}
			
			
		}
		else{
			$view="login";
		}
		return $view;

	}
}