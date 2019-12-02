<section class="agromas_menu col-10   ">
	<center>
		<h1>Ubicacion de las trampas del productor <i class="ml-5 fas fa-file-pdf"></i></h1>
                      <div class="form-row m-2  ">
           <select onchange="getSelecteProd()" id="prod_sel" class="custom-select" name="prod_sel">
            
            <?php

  echo "  <option selected value=\"*\">Todos</option>";
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
<div style="width: 100%; height: 350px;" id="mapContainer"></div>

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
          <input type="text" class="form-control" id="tramp_id"  name="tramp_id" placeholder="id">
        </div>

  <div class="input-group mb-3 input-group-sm form-group col-6">
                   <div class="input-group-prepend">
                     <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
                  </div>
                <input type="text" class="form-control " id="tramp_lat" placeholder="Latitud">
             </div>

          
    </div>


    <div class="form-row">
          <div class="input-group mb-3 input-group-sm form-group col-6">
                   <div class="input-group-prepend">
                     <span class="input-group-text ti-user "><i class="fas fa-calendar-minus"></i></span>
                  </div>
                <input type="text" class="form-control " id="tramp_date" placeholder="Fecha">
             </div>



           <div class="input-group mb-3 input-group-sm form-group col-6">
              <div class="input-group-prepend">
                 <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
              </div>
          <input type="text" class="form-control " id="tramp_lng" placeholder="Longitud">
        </div>

        
    </div>
  </div>
          <div class="col-4">
                  <div class="form-row">
                     <div class="input-group mb-3 input-group-sm form-group col-12">
                        <div class="input-group-prepend">
                           <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
                        </div>
                    <input type="text" class="form-control " id="arb-reg-nom" placeholder="Mariposas Atrapadas">
                  </div>
                  </div>
                    <div class="form-row">
                    <div class="input-group mb-3 input-group-sm form-group col-6">
                     <button class="btn btn-block btn-warning">Reoporte</button>
                   </div>
                     <div class="input-group mb-3 input-group-sm form-group col-6">
                     <button class="btn btn-block btn-warning">Desisntalar</button>
                  </div>
                </div>
                          
         </div>
    </div>
</div>  
	</center>
</section>

 <script>
var map;
   const mapmarck='<svg width="50" height="50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>';




function setMap(){
    // Initialize the platform object:
    var platform = new H.service.Platform({
    'apikey': 'SEI-1bn-6vSC9G7pEalClDrOHK1w38l5IUSl_XrE5s0'
    });

   // Get the default map types from the Platform object:
var defaultLayers = platform.createDefaultLayers();

//Step 2: initialize a map - this map is centered over Europe
map = new H.Map(document.getElementById('mapContainer'),
  defaultLayers.vector.normal.map,{
  center: {lat:50, lng:5},
  zoom: 4,
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
  map.setCenter({lat:20.2964255, lng:-99.1971307});
  map.setZoom(14);  
}
function getTramps(id){
setMap();
$.ajax({
  url:"./ajax/getTramps.php",
  data:{"id":id},
  type:"GET"

}).done(function(res){
  var res=res.substring(0,res.length-1).split(";");
  for(var i=0;i<res.length;i++){
    trampas=res[i].split(",");
  //  alert(trampas[3]);
    addMarck({lat:trampas[3],lng:trampas[2]},trampas);
  }
  });
}


function addMarck(cords,data){
  var icon = new H.map.Icon(mapmarck);
  marker = new H.map.Marker(cords, {icon: icon});
  marker.setData({"id":data[0],"date":data[1],"lat":data[2],"lng":data[3]});
  marker.addEventListener('tap', function (evt) {
    $("#tramp_id").val(evt.target.getData().id);
    $("#tramp_lng").val(evt.target.getData().lng);
    $("#tramp_lat").val(evt.target.getData().lat);
    $("#tramp_date").val(evt.target.getData().date);
   });
// Add the marker to the map and center the map at the location of the marker:
map.addObject(marker);
//addPolygonToMap();
}
function getSelecteProd(){
  $("#mapContainer").html("");
  getTramps($("#prod_sel").val());
}

getTramps("*");



  </script>