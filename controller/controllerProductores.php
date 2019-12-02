<?php
	require ("./model/modelProductores.php");
	class controllerProductores{

		public function getProdutoresList(){
				$model= new modelProductores();
				$list=$model->getProductoresList();
		
		
				return $list;
		}
		public function getProductorInfo($productor){
				$model= new modelProductores();
				return $res=$model->getProductorInfo($productor);
		}

		public function updateProductoresInfo(){
		
		}

	}