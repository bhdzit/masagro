
			<div class="row">
				<div class="col-4"></div>
			<section class="col-4 mt-5">
					  <center>
        <h1>Nuevo Usuario</h1>
       
        <form id="informacion" method="post" action="./ajax/registrateUser.php">

        	<div class="form-row">
							<div class="input-group mb-3 input-group-sm form-group col-12">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user bg-primary"><i class="far fa-user"></i></span>
							    </div>
					      <input type="text" class="form-control " id="arb-reg-nom" placeholder="Usuario">
					   </div>
			</div>

			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-12">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user bg-primary"><i class="fas fa-unlock-alt"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="contraseña">
				</div>
			</div>

			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-12">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user bg-primary"><i class="fas fa-unlock-alt"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Confirmar Contraseña">
				</div>
			</div>

			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-12">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user bg-primary"><i class="fas fa-building"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="RFC">
				</div>
			</div>
			
			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-12">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user bg-primary"><i class="fas fa-building"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Razon Social">
				</div>
			</div>


			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-12">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user bg-primary"><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Apellido Paterno">
				</div>
			</div>
			
			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-12">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user bg-primary"><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Apellido Materno">
				</div>
			</div>
			
			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-12">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user bg-primary"><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Nombre">
				</div>
			</div>
			
			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-12">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user bg-primary"><i class="fas fa-at"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Correo">
				</div>
			</div>
			
					<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-12">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user bg-primary"><i class="fas fa-phone"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Telefono">
				</div>
			</div>
			
			
			
			
			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-12">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user bg-primary"><i class="fas fa-user-tag"></i></span>
					    </div>
				 <select class="form-control" name="Tipos : ">
		            <option value="Productor">Productor</option>
		            <option value="Usuario" >Usuario</option>
	             </select>
				</div>
			</div>
                  
			
			<div class="form-row">
				<div class="input-group mb-3 input-group-sm form-group col-12">
						<a href="<?php echo SERVERURL?>"><i class="fas fa-undo-alt"></i> regresar</a>
					   <input class="btn bg-warning" type="submit"  value="enviar" /></tr>
				</div>
			</div>
       
            
            </form>
    </center>

</section>
</div>