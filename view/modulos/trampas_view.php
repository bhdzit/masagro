<section class="agromas_menu col-10 mt-3 ">
	<center>
		<h1>Trampoas con Productor <i class="ml-5 fas fa-file-pdf"></i></h1>

<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false">
    Productor
  </button>
  <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
    <a class="dropdown-item" href="todos">Todos</a>
    <a class="dropdown-item" href="productor1">Productor 1</a>
    <a class="dropdown-item" href="productor1">Productor 2</a>
    <a class="dropdown-item" href="productor1">Productor 3</a>
    <a class="dropdown-item" href="productor1">Productor 4</a>
  </div>

</div>
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false">
  Reporte
  </button>
<div style="width: 100%; height: 350px;" id="mapContainer"></div>

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