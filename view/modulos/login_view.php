							<section class="row">

							<div class="col-0 col-sm-3 d-md-block col-md-4 p-0"></div>
							<!--col-12 col-sm-6 d-md-block col-md-4-->
							<form id="masagro-login" class="arb-agro-login  d-none" id='form1' name='form1' action="./ajax/loginUser.php" method="POST">
								<center>
									<div class="arb-login-contaner">
								   <strong >
								    Inicia Sesion<br>
					
								    <p></p>
								  </strong>
								 <div class="input-group mb-3">
								    <div class="input-group-prepend">
								      <span class="input-group-text"><i class="fas fa-user"></i></span>
								    </div>
								    <input type="text" class="form-control" placeholder="RFC" minlength="12" required="" name="usu">
								  </div> 
												<div class="input-group mb-3">
								    <div class="input-group-prepend">
								      <span class="input-group-text"><i class="fas fa-unlock"></i></span>
								    </div>
								    <input type="password" class="form-control" placeholder="Password" required="" name="pass">
								  </div>
									<div>
									
									 <input type="submit"   value="Enviar">
									</div>
									<div id="pass_alert" class="alert alert-danger mt-2 d-none" role="alert" >
				  <strong>Error</strong> Contraseña o Usuario incorecta.
				</div>
									<a href="#">¿Olvidaste tu contrasea?</a>
									<input type="button" onclick="document.form1.action = 'registrarse'; document.form1.submit()" class="  " value="Crear Nueva Cuenta">
									</div>
								</center>
								</form>

				
			</section>
			<button onclick="showLogin()" id="toggle" class="toggle i"><i class="fas fa-user"></i></button>
		</div>
	</div>
	<script type="text/javascript">
		var alert_pass=document.getElementById("pass_alert");
	$("#masagro-login").submit(function(e){
			e.preventDefault();
			$.ajax({
			url:$(this).attr("action"),
			type:$(this).attr("method"),
			data:$(this).serialize()


		})
		.done(function(res){
			if(res==="2"){
				alert_pass.classList.remove("d-none");
			}
			else{
 			location.reload();
			}
		});
		});
	</script>
