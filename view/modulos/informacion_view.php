<?php 
require_once("./core/db.php");
require_once("./controller/contreollercoInfo.php");
$controller=new contreollercoInfo();
$res=$controller->getInformation();
?>

<section class=" agromas_menu col-sm-12 d-md-block col-md-10   p-3 ">
				<center>

                    <h1>Informacion</h1>
				<form id="infoForm" name="infoForm" class="form-productores m-0 p-5" action="./ajax/updateInfo.php" onsubmit="return false;" method="post"  >
		
					<br>
                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                        </div>
                    <input type="text" name="info_business_name"  class="form-control" readonly="" placeholder="Razon Social" value="<?php echo $res["ma_usu_business_name"]?>" >
					</div>

                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div><input readonly=""  type="text" class="form-control" name="info_representative" placeholder="Represetnante" value="<?php echo $res["ma_usu_name"]." ".$res["ma_usu_last_name"] ." ".$res["ma_usu_sec_last_name"]?>" >
                    </div>


                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                        </div><input type="text" name="info_location" readonly=""  value="<?php echo $res["em_ubicacion"]?>"  class="form-control"  placeholder="Direccion">
                    </div>



                    <div class="input-group mb-3 col-auto">
                         <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-mobile"></i></span></div>
                      <input type="phone" class="form-control" readonly=""  name="info_phone"  value="<?php echo $res["ma_usu_tel"];?>" placeholder="Telefono">
                  </div>
					<button id="btnCancelar"   onclick="cancelarModificacion()" hidden="">Cancelar</button>
                    <button id="btnGuardar" onclick="updateInfo()" hidden="">Guardar</button>
					<button id="btnModificar"  onclick="modificarDatosEmpresa()" >Modificar</button>

				</form>			
				</center>
			</section>	
		</div>
    </div>
    <script type="text/javascript">
        $("#infoForm").submit(function(e){
        e.preventDefault();
        });
        function updateInfo(){
      
        $.ajax({
           url:$("#infoForm").attr("action"),
            type:$("#infoForm").attr("method"),
            data:$("#infoForm").serialize()
        })
        .done(function(res){
            alert(res);
           location.reload();
        });
    }    
    </script>