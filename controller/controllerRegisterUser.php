<?php
require ("../model/modelRegisterUser.php");
class controllerRegisterUser {
	public  function setNewUser(){
		$model=new modelRegisterUser();
		$model->setNewUser(); 
	}

}