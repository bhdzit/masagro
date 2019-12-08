
			<section class="row mt-5">
				<div class="col-2 d-none d-md-block col-md-2"></div>
				<div class="col-12 col-sm-12 d-md-block col-md-8 p-4">
					  <center>
        <h1>Nuevo Usuario</h1>
       
        <form   id="informacionForm" method="post" action="./ajax/registrateUser.php">


			<div class="form-row">
				<div class="col-12 col-sm-12 d-md-block col-md-6">
				<div class="input-group mb-3 input-group-sm form-group">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-building"></i></span>
					    </div>
					<input required="" minlength="12" maxlength="13" type="text" class="form-control " placeholder="RFC" name="rfc">
				</div>
				</div>


			<div class="col-12 col-sm-12 d-md-block col-md-6">
				<div class="input-group mb-3 input-group-sm form-group ">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-building"></i></span>
					    </div>
					<input required="" type="text" class="form-control " placeholder="Razon Social" name="business_name">
				</div>
			</div>
		</div>

        	<div class="form-row">
        		<div class="col-12 col-sm-12 d-md-block col-md-6">
				<div class="input-group mb-3 input-group-sm form-group ">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input required="" type="text" class="form-control " placeholder="Nombre" name="name">
				</div>
			</div>

		<div class="col-12 col-sm-12 d-md-block col-md-6">
					<div class="input-group mb-3 input-group-sm form-group ">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input required="" type="text" class="form-control " placeholder="Apellido Paterno" name="last_name">
				</div>
		</div>

			</div>

			<div class="form-row">
			
				<div class="col-12 col-sm-12 d-md-block col-md-6">
					<div class="input-group mb-3 input-group-sm form-group ">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input required="" type="text" class="form-control " placeholder="Apellido Materno" name="sec_last_name">
				</div>

			</div>


			<div class="col-12 col-sm-12 d-md-block col-md-6">
				<div class="input-group mb-3 input-group-sm form-group">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-phone"></i></span>
					    </div>
					<input required="" type="tel" class="form-control" pattern="[0-9]{10}" placeholder="Telefono" name="phone">
				</div>

			</div>
			</div>
			
			<div class="form-row">
				<div class="col-12 col-sm-12 d-md-block col-md-6">
						   	<div class="input-group mb-3 input-group-sm form-group">
					<div class="input-group-prepend">
					   <span class="input-group-text ti-user "><i class="fas fa-at"></i></span>
				    </div>
					<input required="" type="email" class="form-control " placeholder="Correo" name="mail">
				</div>
			</div>

			<div class="col-12 col-sm-12 d-md-block col-md-6">
				<div class="input-group mb-3 input-group-sm form-group">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user-tag"></i></span>
					    </div>
				

				 <select class="form-control" name="role">
				 	<option value="1">Admin</option>
		            <option value="2">Productor</option>
		            <option value="3" >Usuario</option>
	             </select>
				</div>

				</div>	
			</div>

				<div class="form-row">

					<div class="col-12 col-sm-12 d-md-block col-md-6">
				<div class="input-group mb-3 input-group-sm form-group">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-unlock-alt"></i></span>
					    </div>
					<input required="" id="pass1" minlength="6"  type="password" class="form-control " placeholder="contraseña" name="password">
					

				</div>
				<div id="pass_alert" class="alert alert-warning d-none" role="alert" >
				  <strong>Warning</strong> La Contraseña debe tener almenos 6 caracteres.
				</div>
		
			</div>

			<div class="col-12 col-sm-12 d-md-block col-md-6">
					<div class="input-group mb-3 input-group-sm form-group">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-unlock-alt"></i></span>
					    </div>
					<input required="" id="pass2" type="password" class="form-control " placeholder="Confirmar Contraseña" name="sec_password">
				</div>
				<div id="pass_alert2" class="alert alert-warning d-none" role="alert" >
				  <strong>Warning</strong> La Contraseña no coiciden.
				</div>
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
	var pass1= document.getElementById("pass1");
	var alert_pass=document.getElementById("pass_alert");
	pass1.addEventListener("keyup",function(){
	//	alert(pass1.value.replace(/[^A-Za-z]/g, "").length);
		const caracterEspeciales=pass1.value.replace(/[^A-Za-z]/g, "").length-pass1.value.length;
		if(pass1.value.length<6){
		alert_pass.className="alert alert-warning";	
		alert_pass.innerHTML="La contrasea debe tener almenos 6 caracteres"
		alert_pass.classList.remove("d-none");
		}
		else{
			console.log(pass1.value.length+","+caracterEspeciales+","+pass1.value.length);
			if(pass1.value.replace(/[^A-Z]/g, "").length>=1&&caracterEspeciales!=0){
			alert_pass.className="alert alert-success";
			alert_pass.innerHTML="Constrasea corecta";
			}
			else{
				alert_pass.className=("alert alert-danger");
				alert_pass.innerHTML="La contrasea debe conterner una Mayuscula almenos";
			}
		}

	});
	var pass2=document.getElementById("pass2");
	var alert_pass2=document.getElementById("pass_alert2");
	pass2.addEventListener("keyup",function(){
		if(pass2.value==pass1.value){
		alert_pass2.classList.add("d-none");
		}
		else{
		alert_pass2.classList.remove("d-none");
		}



	});
	$("#informacionForm").submit(function(e){
		e.preventDefault();
		if(pass1.value===pass2.value){
		$.ajax({
			url:$(this).attr("action"),
			type:$(this).attr("method"),
			data:$(this).serialize()


		})
		.done(function(res){
			alert(res);
			console.log(res);
		});
	}
	else{
		alert("No coiniden "+pass2.value+","+pass1.value);
	}


	});

</script>
