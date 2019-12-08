<?php
require("./controller/controllerTrampas.php");
 $item=explode("/",$_GET[views]);
$controller = new controllerTrampas();
#$res=$controller->getTrampsList();

?>

<section class="agromas_menu col-10  p-2 ">
<div class="row">
				 	<div class="col-12 ">
				 		  <div class="card">
  <div class="card-header">
  Datos de la Trampa 
  </div>
  <div class="card-body form-row">
      <div class="col-12">
      <div class="form-row">
        
        <div class="input-group mb-3 input-group-sm form-group col-2">
              <div class="input-group-prepend">
                 <span class="input-group-text ti-user "><i class="fas fa-fingerprint"></i></span>
              </div>
          <input readonly type="text" class="form-control" id="tramp_id"  name="tramp_id" placeholder="id" value="<?php echo $res["tramp_id"] ?>">
        </div>

  <div class="input-group mb-3 input-group-sm form-group col-6">
                   <div class="input-group-prepend">
                     <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
                  </div>
                <input readonly type="text" class="form-control " id="tramp_name" placeholder="NOMBRE" value="<?php echo $res["usu_business_name"]?>">
             </div>

          
    </div>


    <div class="form-row">
          <div class="input-group mb-3 input-group-sm form-group col-4">
                   <div class="input-group-prepend">
                     <span class="input-group-text ti-user "><i class="fas fa-calendar-minus"></i></span>
                  </div>
                <input readonly type="text" class="form-control " id="tramp_date" placeholder="Fecha" value="<?php echo $res["tramp_date"]?>">
             </div>



           <div class="input-group mb-3 input-group-sm form-group col-4">
              <div class="input-group-prepend">
                 <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
              </div>
          <input readonly type="text" class="form-control " id="tramp_lng" placeholder="Longitud" value="<?php echo $res["ST_X(tramp_point)"]?>">
        </div>
        <div class="input-group mb-3 input-group-sm form-group col-4">
                   <div class="input-group-prepend">
                     <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
                  </div>
                <input readonly type="text" class="form-control " id="tramp_lat" placeholder="Latitud" value="<?php echo $res["ST_Y(tramp_point)"]?>">
             

        
    </div>
  </div>
  
        <div class="form-row">
  		 		    <div class="card spur-card col-12">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="spur-card-title">Insectos Atrapados</div>
                                </div>
                                <div class="card-body ">
                                    <table class="table table-in-card">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID DE REPORTE</th>
                                                <th scope="col">FECHA DE REPORTE</th>
                                                <th scope="col">MARIPOSAS</th>
                                                <th scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tb_rep">
                             <tr><td>No hay datos que mostrar</td></tr>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>

  			</div>

	<div class="card">
		<form action="../ajax/setReporteInsectos.php" method="POST" id="reportForm">
    <input hidden type="text" name="id_tramp" id="id_tramp" >
		<div class="card-header">
  	Reportar Captura
  </div>
  <div class="card-body form-row">
  	  <div class="col-12">
      <div class="form-row">
      	<input type="text" name="tramp_id" id="tramp_id"value="<?php echo $res["tramp_id"]?> " hidden>
      	<div class="input-group mb-3 input-group-sm form-group col-3">
                   <div class="input-group-prepend">
                     <span class="input-group-text ti-user "><strong>#</strong></span>
                  </div>
                <input type="number" class="form-control " id="tramp_camp"  name="tramp_camp" placeholder="Numero de insectos">
             

        
    </div>
    <div class="input-group mb-3 input-group-sm form-group col-3">
                   <div class="input-group-prepend">
                     <span class="input-group-text ti-user "><strong>#</strong></span>
                  </div>
                <input type="date" class="form-control " id="tramp_date"  name="tramp_date" placeholder="Fecha" required>
             

        
    </div>
          	<div class="input-group mb-2 input-group-sm form-group col-2">
 
          <button type="submit" class="btn btn-warning form-control">Reportar</button>   

        
    </div>
          	<div class="input-group mb-2 input-group-sm form-group col-2">
                   <button type="button" class="btn btn-warning form-control">Cancelar</button>

        
    </div>
  		</div>
</div>

</div>
</form>		

	</div>



         </div>
		




	
    </div>
	


					</div>

				</div>

			</div>
    </section>
 <script type="text/javascript">

    $("#reportForm").submit(function(e){
        e.preventDefault();
        $.ajax({
        url:$(this).attr("action"),
        type:$(this).attr("method"),
        data:$(this).serialize()
        }).done(function(res){
          
alert("Se Ha leantado el reporte Corectamante ");        })
      });
   function getTramps(id){

$.ajax({
  url:"../ajax/getSelectedTrampInfo.php",
  data:{"sql":"select *,ST_Y(ma_tramp_point), ST_X(ma_tramp_point) from ma_tramp inner join ma_user_info on ma_tramp_usu_id=ma_user_id   where ma_tramp_id=1;"},
  type:"GET"

}).done(function(res){
  res=res.split(",");
  $("#tramp_id").val(res[0]);
  $("#id_tramp").val(res[0]);
   $("#tramp_name").val(res[1]);
    $("#tramp_date").val(res[2]);
     $("#tramp_lat").val(res[3]);
        $("#tramp_lng").val(res[4]);

  });
}
getTramps("1");

function getRportLsit(id){
$.ajax({
  url:"../ajax/getInsecReport.php",
  data:{"id":id},
  type:"GET"

}).done(function(res){
 // alert("sfsfs"+res);
  var html="";
  res=res.substring(0,res.length-1);
  res=res.split(";");
  for(var i=0;i<res.length;i++){
    var repo=res[i].split(",");
    html+="<tr>"
      +"<td>"+repo[0]+"</td>"
      +"<td>"+repo[1]+"</td>"
      +"<td>"+repo[2]+"</td>"
        +"</tr>";

          }


  $("#tb_rep").html(html);
  getRportLsit("1");
  });

}
getRportLsit("1");
 </script>