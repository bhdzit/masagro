<section class="agromas_menu col-10  p-5">
	<center>
		<h1>Informacion de la Parcela</h1>
		<form action="404.php" onsubmit="return false;">
		<div class="form-row ">
							<div class="input-group mb-3 input-group-sm form-group col-6">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user "><i class="fas fa-fingerprint"></i></span>
							    </div>
					      <input type="text" class="form-control " id="arb-reg-nom" placeholder="ID">
					   </div>

					   	<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					    <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Nombre">
				</div>
			</div>

			<div class="form-row">
							<div class="input-group mb-3 input-group-sm form-group col-6">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user "><i class="fas fa-map-marked-alt"></i></span>
							    </div>
					      <input type="text" class="form-control " id="arb-reg-nom" placeholder="Municipio">
					   </div>

					   	<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					    <span class="input-group-text ti-user "><i class="fas fa-map-marker-alt"></i></span>
					    </div>
					
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Superficie">
				</div>
			</div>

			<div class="form-row">
							<div class="input-group mb-3 input-group-sm form-group col-6">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
							    </div>
					      <input type="text" class="form-control " id="arb-reg-nom" placeholder="Latitud">
					   </div>

					   	<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Longitud">
				</div>
			</div>

			<div class="form-row">
							<div class="input-group mb-3 input-group-sm form-group col-6">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user "><i class="fas fa-calendar-minus"></i></span>
							    </div>
					      <input type="text" class="form-control " id="arb-reg-nom" placeholder="Fecha">
					   </div>

					   	<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<select class="form-control">
		            <option value="Productor">Productor 1</option>
		            <option value="Usuario" >Productor 2</option>
		            <option value="Usuario" >Productor 3</option>
	             </select>
				</div>
			</div>
			
			<div class="form-row">

				<div class="input-group mb-3 input-group-sm form-group col-2">
				
					<button id="btnGuardar" class="btn-block" onclick="evtSafebtn()">Guardar</button>	  
			   </div>

			   	<div class="input-group mb-3 input-group-sm form-group col-2">
					<button id="btnCancelar"  class="btn-block" onclick="evtancelbtn()">Cancelar</button>	  
			   </div>
			</div>
		</form>
	</center>
	
</section>