<section class="agromas_menu col-10   ">
	<center>
		<h1>Ubicacion de las trampas del productor <i class="ml-5 fas fa-file-pdf"></i></h1>
                      <div class="form-row m-2  ">
          <select class="custom-select">
            <option selected>Todos</option>
            <option value="1">Productor 1</option>
            <option value="2">Productor 2</option>
            <option value="3">Productor 3</option>
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
          <input type="text" class="form-control "  name="ID" placeholder="id">
        </div>

  <div class="input-group mb-3 input-group-sm form-group col-6">
                   <div class="input-group-prepend">
                     <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
                  </div>
                <input type="text" class="form-control " id="arb-reg-nom" placeholder="Latitud">
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
                 <span class="input-group-text ti-user "><i class="fas fa-location-arrow"></i></span>
              </div>
          <input type="text" class="form-control " id="arb-reg-nom" placeholder="Longitud">
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


  </script>