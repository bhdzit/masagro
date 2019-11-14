
			<section class="row mt-5">
				<div class="col-2"></div>
				<div class="col-8">
					  <center>
        <h1>Nuevo Usuario</h1>
       
        <form   id="informacion" method="post" action="./ajax/registrateUser.php">


			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-building"></i></span>
					    </div>
					<input type="text" class="form-control " placeholder="RFC" name="rfc">
				</div>


				<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-building"></i></span>
					    </div>
					<input type="text" class="form-control " placeholder="Razon Social">
				</div>
			</div>

        	<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " placeholder="Nombre">
				</div>

					<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " placeholder="Apellido Paterno">
				</div>


			</div>

		

			



			<div class="form-row">
			

					<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " placeholder="Apellido Materno">
				</div>

				<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-phone"></i></span>
					    </div>
					<input type="text" class="form-control " placeholder="Telefono">
				</div>

			</div>

			
			<div class="form-row">
						   	<div class="input-group mb-3 input-group-sm form-group col-6">
					<div class="input-group-prepend">
					   <span class="input-group-text ti-user "><i class="fas fa-at"></i></span>
				    </div>
					<input type="text" class="form-control " placeholder="Correo">
				</div>

				<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user-tag"></i></span>
					    </div>
				 <select class="form-control" name="Tipos : ">
		            <option value="Productor">Productor</option>
		            <option value="Usuario" >Usuario</option>
	             </select>
				</div>

					
			</div>

				<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-unlock-alt"></i></span>
					    </div>
					<input type="text" class="form-control " placeholder="contraseña">
				</div>

					<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-unlock-alt"></i></span>
					    </div>
					<input type="text" class="form-control " placeholder="Confirmar Contraseña">
				</div>


			</div> 
			
			
			
			<div class="form-row">
				
					

				<div class="input-group mb-3 input-group-sm form-group col-4">
					   <input type="submit"  value="Enviar" />
				</div>
				<div class="input-group mb-3 input-group-sm form-group col-4" >
					<a href="<?php echo SERVERURL?>" style="color: #2d475f; width: 100%;"><i class="fas fa-undo-alt"></i> regresar</a>
				</div>

			</div>
                 
			
       
            
            </form>
    </center>
</div>

</section>
<script type="text/javascript">
	/*$(function() {
	    // Get the form.
	    var form = $('#informacion');

	    // Get the messages div.
	    var formMessages = $('#form-messages');
		$(form).submit(function(event) {
	    // Stop the browser from submitting the form.
	    event.preventDefault();
	    var formData = $(form).serialize();
	    alert(formData);
		});
	
	});
*/
</script>
