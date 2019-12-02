<section class="agromas_menu col-10   ">
	<center>
		<h1>Instalar trampas del productor <i class="ml-5 fas fa-file-pdf"></i></h1>
                      <div class="form-row m-2  ">

          
      </div>
<div style="width: 100%; height: 350px;" id="mapContainer"></div>
      <form id="trampForm" action="./ajax/setTramp.php" method="post" onsubmit="return false">
  <div class="card">
  <div class="card-header">
  Datos de la Trampa
  </div>
  <div class="card-body form-row">
      <div class="col-8">
      <div class="form-row">
        
        <div class="input-group mb-3 input-group-sm form-group col-6">
              <div class="input-group-prepend">
                 <span class="input-group-text ti-user "><i class="fas fa-fingerprint"></i></span>
              </div>
          <input type="text" class="form-control "  name="ID" placeholder="id">
        </div>

  <div class="input-group mb-3 input-group-sm form-group col-6">
                   <div class="input-group-prepend">
                     <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
                  </div>
                <input type="text" class="form-control" id="tramp_lat" name="tramp_lat" placeholder="Latitud" required>
             </div>

          
    </div>


    <div class="form-row">
          <div class="input-group mb-3 input-group-sm form-group col-6">
                   <div class="input-group-prepend">
                     <span class="input-group-text ti-user "><i class="fas fa-calendar-minus"></i></span>
                  </div>
                <input type="date" class="form-control " name="tramp_date" placeholder="Fecha" required>
             </div>



           <div class="input-group mb-3 input-group-sm form-group col-6">
              <div class="input-group-prepend">
                 <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
              </div>
          <input type="text" class="form-control " id="tramp_lng" name="tramp_lng" placeholder="Longitud" required>
        </div>

        
    </div>
  </div>
          <div class="col-4">
                  
                       <div class="form-row">
                    <div class="input-group mb-3 input-group-sm form-group col-12">
                    <select onchange="getSelecteProd()" id="prod_sel" class="custom-select" name="prod_sel">
            
            <?php


            require_once ("./controller/controllerProductores.php");
            $controller= new controllerProductores();
         $list =  $controller->getProdutoresList();

    #      echo "  <option selected value=\"*\">Todos</option>";
      while ($productor = $list->fetch_assoc()) {
            echo "<option value=\"".$productor["ma_user_id"]."\">".$productor["ma_usu_name"]."</option>"; 
            }      

            ?>
          </select>
                   </div>
                 </div>

                    <div class="form-row">
                    <div class="input-group mb-3 input-group-sm form-group col-12">
                     <button onclick="setTramp()" class="btn btn-block btn-warning">Instalar</button>
                   </div>
                   
                </div>
                          
         </div>
    </div>
</div>  
  </form>
	</center>
</section>

 <script>

  const mapmarck='<svg width="50" height="50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>';

  function moveMapToBerlin(map){
		
  map.setCenter({lat:20.2964255, lng:-99.1971307});
  map.setZoom(14);
};

    // Initialize the platform object:
    var platform = new H.service.Platform({
    'apikey': 'SEI-1bn-6vSC9G7pEalClDrOHK1w38l5IUSl_XrE5s0'
    });

   // Get the default map types from the Platform object:
var defaultLayers = platform.createDefaultLayers();

//Step 2: initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('mapContainer'),
  defaultLayers.vector.normal.map,{
  center: {lat:50, lng:5},
  zoom: 4,
  pixelRatio: window.devicePixelRatio || 1
});
// Add event listener:
map.addEventListener('tap', function(evt) {
    var coord = map.screenToGeo(evt.currentPointer.viewportX,
            evt.currentPointer.viewportY);

  /*  var node = document.createElement("INPUT");          // Create a text node
    node.className="input-group form-control mb-2"; 
    node.value=("{ \"lat\":\""+coord.lat+"\",\"lng\":\""+coord.lng+"\"},");
    ubicationinfo.appendChild(node);
    */
    addMarck({lat:coord.lat,lng:coord.lng});
    $("#tramp_lat").val(coord.lat);
    $("#tramp_lng").val(coord.lng);
});
function addMarck(cords){
  var icon = new H.map.Icon(mapmarck);
  marker = new H.map.Marker(cords, {icon: icon});

// Add the marker to the map and center the map at the location of the marker:
map.addObject(marker);
//addPolygonToMap();
}
// add a resize listener to make sure that the map occupies the whole container
window.addEventListener('resize', () => map.getViewPort().resize());

//Step 3: make the map interactive
// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Create the default UI components
var ui = H.ui.UI.createDefault(map, defaultLayers);
window.onload = function () {
  moveMapToBerlin(map);
}  

function getSelecteProd(){

}
function setTramp(){
  $.ajax({
    url:$("#trampForm").attr("action"),
    data:$("#trampForm").serialize(),
    type:$("#trampForm").attr("method")
  }).done(function(res){
    alert(res);
    
  });
}

  </script>
