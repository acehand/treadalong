<html>
<head>
    <meta charset="UTF-8" />
    <title>Treadalong...</title>
    <link rel="stylesheet" href="css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="css/map.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<div data-control="geocode" id="search">
      <form class="geocode">
        <input placeholder="Search for an address" type="text">
        <input type="submit" />
        <div id="geocode-error"></div>
    </form>
</div>
<div id="map" class="map"></div>
<script src="js/jquery.min.js"></script>
    <script src="js/modestmaps.min.js"></script>
    <script src="js/wax/wax.mm.js"></script>
    <script src="js/wax/wax.ext.js"></script>
    <script src="js/easey.js"></script>
    <script src="js/mmg.js"></script>
    <script src="js/script.js"></script>
 	<script language="JavaScript" src="http://j.maxmind.com/app/geoip.js"></script>
 	<script type="text/javascript">
        var main = Map('map', {
            api: 'http://a.tiles.mapbox.com/v3/treadalong.map-27tslsyb.jsonp',
            center: {
                lat: geoip_latitude(),      // Intial center point and zoom level.
                lon: geoip_longitude() ,      // To find coordinates and zoom levels
                zoom: 13                    // try: http://www.getlatlon.com
            },
            zoomRange: [0, 15],             // Limit zooming on the map to these levels
            features: [                     // Map features (see readme.md)
                'zoomwheel',
                'movetips',
                'zoombox',
                'zoompan',
                'share'
            ],
        });
    </script>
 <?php echo $this->fetch('content'); ?>