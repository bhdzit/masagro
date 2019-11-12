
			<section class="row mt-5">
				<div class="col-2"></div>
				<div class="col-8">
					  <center>
        <h1>Nuevo Usuario</h1>
       
        <form   id="informacion" method="post" action="./ajax/registrateUser.php">

        	<div class="form-row">
							<div class="input-group mb-3 input-group-sm form-group col-6">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user "><i class="far fa-user"></i></span>
							    </div>
					      <input type="text" class="form-control " id="arb-reg-nom" placeholder="Usuario">
					   </div>

					   	<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-at"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Correo">
				</div>
			</div>

			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-unlock-alt"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="contraseña">
				</div>

					<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-unlock-alt"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Confirmar Contraseña">
				</div>


			</div>

			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-building"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="RFC">
				</div>


				<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-building"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Razon Social">
				</div>
			</div>
			



			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Apellido Paterno">
				</div>

					<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Apellido Materno">
				</div>

			</div>

			
			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Nombre">
				</div>

					<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-phone"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Telefono">
				</div>
			</div>

			
			
			
			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-4">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user-tag"></i></span>
					    </div>
				 <select class="form-control" name="Tipos : ">
		            <option value="Productor">Productor</option>
		            <option value="Usuario" >Usuario</option>
	             </select>
				</div>
					

				<div class="input-group mb-3 input-group-sm form-group col-4">
					   <input type="submit"  value="Enviar" /></tr>
				</div>
				<div class="input-group mb-3 input-group-sm form-group col-4" >
						<a href="<?php echo SERVERURL?>" style="color: #2d475f; width: 100%;"><i class="fas fa-undo-alt"></i> regresar</a>
					</div>

			</div>
                  
			
			<div class="form-row">
			
			</div>
       
            
            </form>
    </center>
</div>

</section>
