<?php
          
          //  unset($_SESSION["usu"]);
session_name("login_sesion");
session_start();

?>
    
<div class="container-fluid ">

		<header class="arb-maxagro-titel row p-0">
		
		
			<div class="col-8 d-none d-md-block col-md-8"></div>
			<div class="col-12 col-sm-12 d-block  col-md-4">
				<i class="fas fa-user-tie"></i>
				<span style="line-height: 2.5vw;">Bienvendio,<?php echo $_SESSION["role"]?></span>
			</div>
		<!--	<div class="col-8 d-none d-md-block col-md-8 ">
           <label class="titel-label"><strong>Instituto Tecnologico del Occidente del Estado de Hidalgo</strong></label> 
            </div>
			<img class="col-2 d-none d-md-block col-md-2 p-0" src="<?php echo SERVERURL?>view/img/LogoTec.png">
		-->
		</header>	