<?php
require("./model/modelgetUserRole.php");
	class controllergetRoleUser{
		public function getRoles(){
					$model= new modelgetUserRole();
		return	$model->getUserRole();
		}
	}
?>