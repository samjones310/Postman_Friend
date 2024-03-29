<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <style>
        body{
            background: #E9D460;
        }  
        input{
            width: 250px;
            background: ;
            border:0px;
            height: 40px;
            padding: 10px;
            border-radius: 2%;
        }
        .map{
            height: 300px;
            width: 300px;
            background: white;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Update</h1>
        </div>
        <div class="row">
             <div class="col-lg-2 col-mg-2"></div>
             <div class="col-lg-3 col-mg-3 box">
			    <form method="post" action="upd.php">
				<input type="text" readonly="readonly" name="uid" id="" placeholder="Unique ID" value="<?php echo $_SESSION['fav']; ?>"><br><br>
                <input type="text" name="adr" id="" placeholder="Address"><br><br>
                <input type="text" name="lat" id="lat" placeholder="Latitude"><br><br>
                <input type="text" name="lng" id="lng" placeholder="Longitude"><br><br>
				<input type="text" name="city" id="cty"  placeholder="City"><br><br>
				<input type="text" name="state" id="sta"  placeholder="State"><br><br>
				<input type="text" name="pin" id="pin"  placeholder="Pin Code"><br><br>
				<input type="submit" value="Update" class="btn btn-success">
				   </form>
             </div>
             <div class="col-mg-6 col-lg-6">
                <div class="map">
				 <head>
 <script src="https://maps.googleapis.com/maps/api/js?key='Your api key'&sensor=false"></script>
        <script>
		
            var map,
                mLat,
                mLng;
                
            function initialize() {
                var mapOptions = {
                    zoom: 12,
                    center: new google.maps.LatLng(11.397, 77.644),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById('map_canvas'),
                    mapOptions
                );
                // add a click event listener to
                // get the lat/lng from click event of map
                google.maps.event.addListener(map, 'click', function(event) {
                    mLat = event.latLng.lat();
                    mLng = event.latLng.lng();
                    document.getElementById('latMap').value = mLat;
                    document.getElementById('lngMap').value = mLng;
                });
            }
            function mapDivClicked (event) {
                var target = document.getElementById('map_canvas'),
                    posx = event.pageX - target.offsetLeft,
                    posy = event.pageY - target.offsetTop,
                    bounds = map.getBounds(),
                    neLatlng = bounds.getNorthEast(),
                    swLatlng = bounds.getSouthWest(),
                    startLat = neLatlng.lat(),
                    endLng = neLatlng.lng(),
                    endLat = swLatlng.lat(),
                    startLng = swLatlng.lng(),
                    lat = startLat + ((posy/350) * (endLat - startLat)),
                    lng = startLng + ((posx/500) * (endLng - startLng));

                document.getElementById('posX').value = posx;
                document.getElementById('posY').value = posy;
                document.getElementById('lat').value = lat; // calculated lat
                document.getElementById('lng').value = lng; // calculated lng

                // the error rate
                document.getElementById('latErr').value = ((mLat - lat) / (endLat - startLat) * 100).toFixed(2);
                document.getElementById('lngErr').value = ((mLng - lng) / (endLng - startLng) * 100).toFixed(2);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
		
    </head>
    <body>
	 <script src="https://maps.googleapis.com/maps/api/js?key=*************************************&callback=initMap"
    async defer></script>
        <div id="map_canvas" onclick="mapDivClicked(event);" style="height: 350px; width: 500px;"></div>
        <div>
		 <input id="posX" type="hidden"/>
       <input id="posY" type="hidden"/>
  </div>

				</div>
             </div>
        </div>
        <div class="row">
            <br><br>
            <div class="col-mg-6 col-lg-6"></div>
            <div class="col-mg-3 col-lg-4">
			<br>
			<br>
			<br>
               <!-- <button class="btn btn-success"></button>-->
            </div>
        </div>
    </div>
</body>
</html>
