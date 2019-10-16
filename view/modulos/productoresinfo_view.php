<section class="agromas_menu col-10  p-0">
				<center>
				<form class="form-productores m-0 p-5" action="#" onsubmit="return false"  >
					<h1>Productores</h1>
					<br>
					 <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                        </div>
                    <input type="text" name=""  class="form-control" readonly="" placeholder="RFC" value="XXX-XX-XX-XX-XXX" >
					</div>
                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-building"></i></span>
                        </div>
                    <input type="text" name=""  class="form-control" readonly="" placeholder="Razon Social" value="Xxxxx Xxxxxx Xxxxxxx" >
					</div>

                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div><input readonly=""  type="text" class="form-control" name="" placeholder="Represetnante" value="Xxxxx Xxxxxx Xxxxxxx" >
                    </div>


                    <div class="input-group col-auto mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                        </div><input type="text"  readonly=""  value="Xxxxx Xxxxxx Xxxxxxx"  class="form-control"  placeholder="Direccion">
                    </div>



                    <div class="input-group mb-3 col-auto">
                         <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-mobile"></i></span></div>
                      <input type="phone" class="form-control" readonly=""  name=""  value="Xxxxx Xxxxxx Xxxxxxx" placeholder="Telefono">
                  </div>
					<button id="btnCancelar" onclick="cancelarModificacion()" hidden="">Cancelar</button>
					<button id="btnEnviar"  onclick="modificarDatosEmpresa()" >Modificar</button>

				</form>			
				</center>
			</section>	
		</div>