
<?php
require_once "./model/modelCoInfo.php";

class contreollercoInfo extends modelCoInfo{
	public function getInformation(){
		
		return $info=modelCoInfo::getcoInfo();
	}
	public function updateInfo(){
	
	}


}