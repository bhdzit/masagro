<?php
require("./controller/controllerProductores.php");
 $item=explode("/",$_GET[views]);
$controller = new controllerProductores();
$res=$controller->getProductorInfo($item[1]);


?>
<section class="agromas_menu col-10  p-0">
				<center>
				<form id="ProductorinfoForm" class="form-productores m-0 p-5" action="../ajax/updateProductoresInfo.php" onsubmit="return false"  method="post">
					<h1>Productores</h1>
					<br>
                    <input type="text" name="info_id" value="<?php echo $res["ma_user_id"] ?>" hidden>
					 <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                        </div>
                    <input type="text" name="prod_rfc"  class="form-control" readonly="" placeholder="RFC" value="<?php echo $res["ma_usu_rfc"]?>" >
					</div>
                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                        </div>
                    <input type="text" name="prod_business_name"  class="form-control" readonly="" placeholder="Razon Social" value="<?php echo $res["ma_usu_business_name"]?>" >
					</div>

                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div><input readonly=""  type="text" class="form-control" name="prod_name" placeholder="Nombre" value="<?php echo $res["ma_usu_name"]?>" >
                    </div>

                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div><input readonly=""  type="text" class="form-control" name="prod_last_name" placeholder="Apellido Paterno" value="<?php echo $res["ma_usu_last_name"]?>"  >
                    </div>

                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div><input readonly=""  type="text" class="form-control" name="prod_sec_last_name" placeholder="Apellido Materno" value="<?php echo $res["ma_usu_sec_last_name"]?>" >
                    </div>


               

                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                        </div><input type="mail"  readonly=""  name="prod_mail"  class="form-control"  placeholder="email" value=<?php echo $res["ma_usu_mail"];?>>
                    </div>



                    <div class="input-group mb-3 col-auto">
                         <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-mobile"></i></span></div>
                      <input type="phone" class="form-control" readonly=""  name="prod_tel" value="<?php echo $res["ma_usu_tel"]?>" placeholder="Telefono">
                  </div>
					<button id="btnCancelar" onclick="cancelarModificacion()" hidden="">Cancelar</button>
                     <button id="btnGuardar" onclick="updateInfo()" hidden="">Guardar</button>
					<button id="btnModificar"  onclick="modificarDatosEmpresa()" >Modificar</button>

				</form>			
				</center>
			</section>	
		</div>
         <script type="text/javascript">
        $("#ProductorinfoForm").submit(function(e){
        e.preventDefault();
        });
        function updateInfo(){
      
        $.ajax({
           url:$("#ProductorinfoForm").attr("action"),
            type:$("#ProductorinfoForm").attr("method"),
            data:$("#ProductorinfoForm").serialize()
        })
        .done(function(res){
            //  console.log(res);

          location.reload();
        });
    }    
    </script>