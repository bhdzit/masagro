<?php
	require ("./model/modelProductores.php");
	class controllerProductores{

		public function getProdutoresList(){
				$model= new modelProductores();
				$list=$model->getProductoresList();
		
				while ($prodcutor = $list->fetch_assoc()) {	

			//	echo "<script>alert(".$list->num_rows .")</script>";	
						

			
			     echo '<tr class="fila_resaltada">
                <td><a href="productoresinfo/'.$prodcutor["ma_usu_rfc"].'">'.$prodcutor["ma_usu_rfc"].'</a></td>
                <td>'.$prodcutor["ma_usu_business_name"].'</td>
                <td>'.$prodcutor["ma_usu_name"]." ".$prodcutor["ma_usu_last_name"]." ".$prodcutor["ma_usu_sec_last_name"].'</td>
                <td>'.$prodcutor["ma_usu_mail"].'</td>
                <td>'.$prodcutor["ma_usu_tel"].'</td>
                <td><a href="trampas_provedor">#</a></td>';
            	
				}
		}
		public function getProductorInfo($productor){
				$model= new modelProductores();
				return $res=$model->getProductorInfo($productor);
		}

		public function updateProductoresInfo(){
		
		}

	}