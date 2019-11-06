<section class="agromas_menu col-10  p-5 ">
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

var animatedSvg =
  '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" ' + 
  'y="0px" style="margin:-112px 0 0 -32px" width="136px"' + 
  'height="150px" viewBox="0 0 136 150"><ellipse fill="#000" ' +
  'cx="32" cy="128" rx="36" ry="4"><animate attributeName="cx" ' + 
  'from="32" to="32" begin="0s" dur="1.5s" values="96;32;96" ' + 
  'keySplines=".6 .1 .8 .1; .1 .8 .1 1" keyTimes="0;0.4;1"' + 
  'calcMode="spline" repeatCount="indefinite"/>' +  
  '<animate attributeName="rx" from="36" to="36" begin="0s"' +
  'dur="1.5s" values="36;10;36" keySplines=".6 .0 .8 .0; .0 .8 .0 1"' + 
  'keyTimes="0;0.4;1" calcMode="spline" repeatCount="indefinite"/>' +
  '<animate attributeName="opacity" from=".2" to=".2"  begin="0s" ' +
  ' dur="1.5s" values=".1;.7;.1" keySplines=" .6.0 .8 .0; .0 .8 .0 1" ' +
  'keyTimes=" 0;0.4;1" calcMode="spline" ' +
  'repeatCount="indefinite"/></ellipse><ellipse fill="#1b468d" ' +
  'cx="26" cy="20" rx="16" ry="12"><animate attributeName="cy" ' +
  'from="20" to="20" begin="0s" dur="1.5s" values="20;112;20" ' +
  'keySplines=".6 .1 .8 .1; .1 .8 .1 1" keyTimes=" 0;0.4;1" ' +
  'calcMode="spline" repeatCount="indefinite"/> ' +
  '<animate attributeName="ry" from="16" to="16" begin="0s" ' + 
  'dur="1.5s" values="16;12;16" keySplines=".6 .0 .8 .0; .0 .8 .0 1" ' +
  'keyTimes="0;0.4;1" calcMode="spline" ' +
  'repeatCount="indefinite"/></ellipse></svg>';

// Create an icon object, an object with geographic coordinates and a marker:
var icon = new H.map.DomIcon(animatedSvg),
  coords = {lat: 20.2964255, lng: -99.1971307},
  marker = new H.map.DomMarker(coords, {icon: icon});
// Add the marker to the map:
map.addObject(marker);
                 
  </script>