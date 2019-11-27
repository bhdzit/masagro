<section class=" agromas_menu col-sm-12 d-md-block col-md-10   p-2 ">

	<center>

                    <h1>Parcelas Registradas</h1>
                      <div class="form-row m-2  ">
        	<select class="custom-select">
            <option selected>Todos</option>
            <option value="1">Productor 1</option>
            <option value="2">Productor 2</option>
            <option value="3">Productor 3</option>
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
					<input type="text" class="form-control "  name="ID">
				</div>

	<div class="input-group mb-3 input-group-sm form-group col-4">
							     <div class="input-group-prepend">
							       <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
							    </div>
					      <input type="text" class="form-control " id="arb-reg-nom" placeholder="Latitud">
					   </div>

					   	<div class="input-group mb-3 input-group-sm form-group col-4">
					    <div class="input-group-prepend">
					       <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Longitud">
				</div>
		</div>


		<div class="form-row">
				 	<div class="input-group mb-3 input-group-sm form-group col-4">
					    <div class="input-group-prepend">
					    <span class="input-group-text ti-user "><i class="fas fa-user"></i></span>
					    </div>
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Nombre">
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
					
					<input type="text" class="form-control " id="arb-reg-nom" placeholder="Superficie">
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
		alert(""+coord.lat+","+coord.lng);
		addMarck({lat:coord.lat,lng:coord.lng});
});

function addMarck(cords){
  var icon = new H.map.Icon(mapmarck);
  marker = new H.map.Marker(cords, {icon: icon});

// Add the marker to the map and center the map at the location of the marker:
map.addObject(marker);
addPolygonToMap();
}

function addPolygonToMap() {
  var lineString = new H.geo.LineString(
    [20.288053116705463,-99.23443754518816, 100,20.30012852522584 ,-99.23701246584244, 100, 20.309707679712112, -99.20285185182877, 100,20.300289524314525 ,-99.19838865602799 , 100],
    'values lat lng alt'
  );
  map.addObject(
    new H.map.Polygon(lineString, {
      style: {
        fillColor: '#FFFFCC',
        strokeColor: '#829',
        lineWidth: 8
      }
    })
  );
}
  </script>
 