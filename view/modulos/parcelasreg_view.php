

<section class="agromas_menu col-10  p-5">

	<center>
		<h1>Informacion de la Parcela </h1>
		<form id="parcela_form" action="./ajax/setParcela.php" onsubmit="return false;" method="post">
		<div class="form-row ">
							<div class="input-group mb-3 input-group-sm form-group col-6">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user "><i class="fas fa-fingerprint"></i></span>
							    </div>
					      <input readonly type="text" class="form-control " id="ma_par_id" placeholder="ID" value="##">
					   </div>

					   	<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					    <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " name="ma_par_name" placeholder="Nombre">
				</div>
			</div>

			<div class="form-row">
							<div class="input-group mb-3 input-group-sm form-group col-6">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user "><i class="fas fa-map-marked-alt"></i></span>
							    </div>
					      <input type="search"  class="form-control" id="ma_search" placeholder="Municipio" list="list">
					      <datalist id="list">
					      	
					      </datalist>
					   </div>

					   	<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					    <span class="input-group-text ti-user "><i class="fas fa-map-marker-alt"></i></span>
					    </div>
					
					<input type="text" class="form-control " name="ma_par_surface" placeholder="Superficie">
				</div>
			</div>

	
			
			<div>
				

			</div>


			<div class="form-row">
							<div class="input-group mb-3 input-group-sm form-group col-6">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user "><i class="fas fa-calendar-minus"></i></span>
							    </div>
					      <input type="date" class="form-control " id="arb-reg-nom" name="ma_par_date" placeholder="Fecha">
					   </div>

					   	<div class="input-group mb-3 input-group-sm form-group col-6">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<select name="ma_par_prod_id" class="form-control">
		           
            <?php


            require_once ("./controller/controllerProductores.php");
            $controller= new controllerProductores();
         $list =  $controller->getProdutoresList();
      while ($productor = $list->fetch_assoc()) {
            echo "<option value=\"".$productor["ma_user_id"]."\">".$productor["ma_usu_name"]."</option>";	
            }      

            ?>
	             </select>
				</div>
			</div>


			<div class="form-row">

				   	<div class="input-group mb-3 input-group-sm form-group col-1">
					
					<button class="btn btn-block btn-warning" onclick="showMap()"><i class="fas fa-map-marked-alt"></i></button>
				</div>

						<div class="input-group mb-3 input-group-sm form-group col-11">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
							    </div>
					      <input type="text" class="form-control " name="ma_par_lat_lon" id="mas-ubi" placeholder="Lat, Lon">
					   </div>

				
			</div>
			
			<div class="form-row">

				<div class="input-group mb-3 input-group-sm form-group col-2">
				
					<button id="btnGuardar" class="btn-block" onclick="setParcela()">Guardar</button>	  
			   </div>

			   	<div class="input-group mb-3 input-group-sm form-group col-2">
					<a  href="parcelas" class=" btn btn-block btn-warning" > Cancelar</a>	  
			   </div>
			</div>
		</form>

    </div>
	</center>

		<div id="mapView"  class="row m-5 d-none" style="position: absolute;position: absolute;top: 0;bottom: 0;left: 0;right: 0;z-index: 2;" 
    >
    	
    	
    	<div class="col-10 bg-warning" id="mapContainer"></div>
    	<div class="col-2 bg-white" id="ubicationinfo">
		<!--	<input class="input-group form-control mb-2" type="text" name="lanlat" placeholder="lan">
			<input class="input-group form-control mb-2" type="text" name="lanlat" placeholder="lan">
			-->
    			<div class="form-row">

				<div class="input-group mb-3 input-group-sm form-group col-6">
				
					<button id="btnGuardar" class="btn-block m-2" onclick="getUbication()">Guardar</button>	  
			   </div>

			   	<div class="input-group mb-3 input-group-sm form-group col-6">
					<button id="btnCancelar"  class="btn-block m-2" onclick="hideMap()">Cancelar</button>	  
			   </div>
			</div>
    	</div>
    	</div>
    
</section>

<script>
function setParcela(){		

     
       
        $.ajax({
           url:$("#parcela_form").attr("action"),
            type:$("#parcela_form").attr("method"),
            data:$("#parcela_form").serialize()
        })
        .done(function(res){
            alert(res);
         //  location.reload();
        });
}




	$("#ma_search").keyup(function(){
	//	alert($(this).val());

	$.ajax({
    // En data puedes utilizar un objeto JSON, un array o un query string
    data: {"app_id" :"huaRuB9tDiRtQmuS5u4q", "app_code":"ArE-VYR2PsrrLuhALSJO2w", "query" : $(this).val()},
    //Cambiar a type: POST si necesario
    type: "GET",
    // Formato de datos que se espera en la respuesta
    dataType: "json",
    // URL a la que se enviará la solicitud Ajax
    url: "http://autocomplete.geocoder.api.here.com/6.2/suggest.json",
})
 .done(function( data, textStatus, jqXHR ) {
     if ( console && console.log ) {
     	console.log( "La solicitud se ha completado correctamente."+data["suggestions"].length );
     	
     	for(var i=0;i<data["suggestions"].length;i++){
        	 var obj=data["suggestions"][i];
        		 $("#list").append("<option value=\""+obj["label"]+"\" >asdasd</option>");
        	 console.log();
         }
     }
 })
 .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log( "La solicitud a fallado: " +  textStatus);
     }
});


	
	});



var ubicationinfo=document.getElementById("ubicationinfo");
var mapContainer=document.getElementById("mapView");
function hideMap(){
mapContainer.classList.add("d-none");
}	
function getUbication(){
	var val="[";
latlon=mapContainer.getElementsByTagName("input");
for(var i=0;i<latlon.length;i++){
	val+=latlon[i].value;
}
var a=val.substring(0,val.length-1);
a+="]";

//alert(a);

var obj=JSON.parse(a);
//alert(obj);
document.getElementById("mas-ubi").value=a;
	mapContainer.classList.add("d-none");
}

function showMap(){




mapContainer.classList.remove("d-none");
var cords={lat:20.2964255, lng:-99.1971307};

	const mapmarck='<svg width="50" height="50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>';




    // Initialize the platform object:
    var platform = new H.service.Platform({
    'apikey': 'SEI-1bn-6vSC9G7pEalClDrOHK1w38l5IUSl_XrE5s0'
    });

   // Get the default map types from the Platform object:
var defaultLayers = platform.createDefaultLayers();







//Step 2: initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('mapContainer'),
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






// Add event listener:
map.addEventListener('tap', function(evt) {
		var coord = map.screenToGeo(evt.currentPointer.viewportX,
            evt.currentPointer.viewportY);

		var node = document.createElement("INPUT");          // Create a text node
		node.className="input-group form-control mb-2"; 
		node.value=("{ \"lat\":\""+coord.lat+"\",\"lng\":\""+coord.lng+"\"},");
		ubicationinfo.appendChild(node);
		
		addMarck({lat:coord.lat,lng:coord.lng});
});

function addMarck(cords){
  var icon = new H.map.Icon(mapmarck);
  marker = new H.map.Marker(cords, {icon: icon});

// Add the marker to the map and center the map at the location of the marker:
map.addObject(marker);
//addPolygonToMap();
}

}

  </script>
