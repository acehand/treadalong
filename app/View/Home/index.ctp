<html>
  <head>
    <title>Museums in Washington, DC</title>
    <link rel="stylesheet" href="css/leaflet.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="leaflet.ie.css" /><![endif]-->

    <script src="js/leaflet.js"></script>
    <script src="js/wax.leaf.min.js"></script>
  </head>
  <body>
    <div id="mapbox" style="width: 800px; height: 400px"></div>
    <script type="text/javascript">
    var url = 'http://a.tiles.mapbox.com/v3/treadalong.map-27tslsyb.jsonp';
    var map = new L.Map('mapbox')  // container's id="mapbox"

    // Center the map on Washington, DC, at zoom 15
    .setView(new L.LatLng(geoip_latitude(), geoip_longitude()), 15);

    // Get metadata about the map from MapBox
    wax.tilejson(url, function(tilejson) {
        map.addLayer(new wax.leaf.connector(tilejson));
    });
    </script>
  </body>
</html>