<?php 
require_once("./core/db.php");
require_once("./controller/contreollercoInfo.php");
$controller=new contreollercoInfo();
$res=$controller->getInformation();
?>

<section class=" agromas_menu col-sm-12 d-md-block col-md-10   p-3">
				<center>

                    <h1>Informacion</h1>
				<form class="form-productores m-0 p-5" action="#" onsubmit="return false;"  >
		
					<br>
                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                        </div>
                    <input type="text" name=""  class="form-control" readonly="" placeholder="Razon Social" value="<?php echo $res["em_nombre"]?>" >
					</div>

                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div><input readonly=""  type="text" class="form-control" name="" placeholder="Represetnante" value="<?php echo $res["em_responsable"]?>" >
                    </div>


                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                        </div><input type="text"  readonly=""  value="<?php echo $res["em_ubicacion"]?>"  class="form-control"  placeholder="Direccion">
                    </div>



                    <div class="input-group mb-3 col-auto">
                         <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-mobile"></i></span></div>
                      <input type="phone" class="form-control" readonly=""  name=""  value="<?php echo $res["em_tel"];?>" placeholder="Telefono">
                  </div>
					<button id="btnCancelar"   onclick="cancelarModificacion()" hidden="">Cancelar</button>
                    <button id="btnGurdar" type="submit" hidden="">Guardar</button>
					<button id="btnModificar"  onclick="modificarDatosEmpresa()" >Modificar</button>

				</form>			
				</center>
			</section>	
		</div>
    </div>