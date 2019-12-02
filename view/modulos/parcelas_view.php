
<section class=" agromas_menu col-sm-12 d-md-block col-md-10   p-2 ">

	<center>

                    <h1>Parcelas Registradas</h1>
                      <div class="form-row m-2  ">
        	<select onchange="getSelecteProd()"id="prod_sel" class="custom-select">
            
            <?php


            require_once ("./controller/controllerProductores.php");
            $controller= new controllerProductores();
         $list =  $controller->getProdutoresList();

          echo "  <option selected value=\"*\">Todos</option>";
      while ($productor = $list->fetch_assoc()) {
            echo "<option value=\"".$productor["ma_user_id"]."\">".$productor["ma_usu_name"]."</option>";	
            }      

            ?>
          </select>
      </div>
      <div style="width: 100%; height: 350px;" id="mapContainer"></div>

	</center>
	<div class="card">
	<div class="card-header">
	Datos de la Parcela
  </div>
  <div class="card-body form-row">
  		<div class="col-10">
  		<div class="form-row">
  			
				<div class="input-group mb-3 input-group-sm form-group col-4">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-fingerprint"></i></span>
					    </div>
					<input id="parce_id" type="text" class="form-control "  name="ID">
				</div>

	<div class="input-group mb-3 input-group-sm form-group col-4">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
							    </div>
					      <input type="text" class="form-control " id="ma_lat" placeholder="Latitud">
					   </div>

					   	<div class="input-group mb-3 input-group-sm form-group col-4">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
					    </div>
					<input type="text" class="form-control " id="ma_lon" placeholder="Longitud">
				</div>
		</div>


		<div class="form-row">
				 	<div class="input-group mb-3 input-group-sm form-group col-4">
					    <div class="input-group-prepend">
					    <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " id="ma_name" placeholder="Nombre">
				</div>


					<div class="input-group mb-3 input-group-sm form-group col-4">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user "><i class="fas fa-map-marked-alt"></i></span>
							    </div>
					      <input type="text" class="form-control " id="arb-reg-nom" placeholder="Municipio">
					   </div>

					   	<div class="input-group mb-3 input-group-sm form-group col-4">
					    <div class="input-group-prepend">
					    <span class="input-group-text ti-user "><i class="fas fa-map-marker-alt"></i></span>
					    </div>
					
					<input type="text" class="form-control " id="ma_surface" placeholder="Superficie">
				</div>
		</div>
	</div>
	<div class="col-2">
		<a class="btn btn-warning" href="<?php echo SERVERURL?>parcelasreg" 
	style="margin-top: 11%;
    
    width: 100%;">Nueva</a>
	</div>

  </div>
</div>
</section>
<script>
var map;
	function createMap(){
	var cords={lat:20.2964255, lng:-99.1971307};



    // Initialize the platform object:
    var platform = new H.service.Platform({
    'apikey': 'SEI-1bn-6vSC9G7pEalClDrOHK1w38l5IUSl_XrE5s0'
    });

   // Get the default map types from the Platform object:
var defaultLayers = platform.createDefaultLayers();







//Step 2: initialize a map - this map is centered over Europe
map = new H.Map(document.getElementById('mapContainer'),
  defaultLayers.vector.normal.map,{
  center: cords,
  zoom: 14,
  pixelRatio: window.devicePixelRatio || 1
});
// add a resize listener to make sure that the map occupies the whole container
window.addEventListener('resize', () => map.getViewPort().resize());

//Step 3: make the map interactive
// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Create the default UI components
var ui = H.ui.UI.createDefault(map, defaultLayers);
}



function addPolygonToMap(figurcord) {
  var lineString = new H.geo.LineString(figurcord  ,
    'values lat lng alt'
  );
  map.addObject(
    new H.map.Polygon(lineString, {
      style: {
        fillColor: '#FFFFFF',
        strokeColor: '#000',
        lineWidth: 1
      }
    })
  );



var cords={lat:figurcord[0]*1, lng:figurcord[1]*1};
addMarck(cords,figurcord[2]);
}
function addMarck(cords,id){
	const mapmarck='<svg width="25" height="25" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>';
  var icon = new H.map.Icon(mapmarck);
  marker = new H.map.Marker(cords, {icon: icon});
  marker.setData(id);
  marker.addEventListener('tap', function (evt) {
    // Now lets log the event
   // alert(evt.target.getData());

    $.ajax({
    	data:{"id":evt.target.getData()},
    	url:"./ajax/getParcelaInfo.php",
    	type:"GET"
    }).done(function(res){
    	var cords=map.screenToGeo(evt.currentPointer.viewportX,evt.currentPointer.viewportY);
    	res=res.split(",");
	   	$("#parce_id").val(res[0]);
	   	$("#ma_name").val(res[1]);
    	$("#ma_surface").val(res[2]);
    	$("#ma_lat").val(cords.lat);
    	$("#ma_lon").val(cords.lng);
    	//alert(res[0]+);
    });
  });

// Add the marker to the map and center the map at the location of the marker:
map.addObject(marker);
//addPolygonToMap();
}




function getParcelas(id){
createMap();
var a=$("#prod_sel").val();
$.ajax({
	data:{"id":id},
	type:"GET",
	url:"./ajax/getParcela.php"
}).done(function (res){
	if(res!="0"){
			res=res.substring(1);
			var array=res.split(";");
			for(var i=0;i<array.length;i++){
			 addPolygonToMap(array[i].substring(0,array[i].length-1).split(",")) ;
			//alert(array[0].substring(0,array[0].length-1));
			}
		}
		else{
			alert("no hay trampas que mostrar");
		}
});
}
getParcelas("*");

function getSelecteProd(){
$("#mapContainer").html("");
alert($("#prod_sel").val());
getParcelas($("#prod_sel").val());
}


/*var figurcord= [20.288053116705463,-99.23443754518816, 100,20.30012852522584 ,-99.23701246584244, 100, 20.309707679712112, -99.20285185182877, 100,20.300289524314525 ,-99.19838865602799 , 100];*/


  </script>
 