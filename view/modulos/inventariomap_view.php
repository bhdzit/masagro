<section class="agromas_menu col-10  p-0 ">
	<center>
		<h1><strong>Ubicacion de la  Trampas del Productor</strong><i class=" ml-5 fas fa-file-pdf"></i></h1>
    <span class="badge badge-primary mr-5">ID: ###</span>
    <span class="badge badge-primary mr-5">FECHA DE REGISTRO ##/##/#### </span>    
    <span class="badge badge-primary mr-5">ID: LONGITUD ##.###</span>
    <span class="badge badge-primary mr-5">ID: LAITITUD ##.###</span>

<div style="width: 100%; height: 350px;" id="mapContainer"></div>
   <button class="btn btn-outline-primary m-3" type="button" >REGRESAR</button>
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