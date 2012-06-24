<div id="mapbox" style="width: 800px; height: 400px"></div>
<script type="text/javascript">
    var url = 'http://a.tiles.mapbox.com/v3/treadalong.map-27tslsyb.jsonp';
    var map = new L.Map('mapbox')  // container's id="mapbox"
    .locateAndSetView();
        wax.tilejson(url, function(tilejson) {
            map.addLayer(new wax.leaf.connector(tilejson));
        }); 
 
    </script>
  </body>
</html>
