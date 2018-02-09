<!DOCTYPE html>
<html>
	<head>
		<title>This Product</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">
		<link rel="stylesheet" href="css/app.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>
	<body>
		<h3></h3>
		<div class="dt mw6 center pt0 pv5-m pv6-ns">
		  <div class="db dtc-ns v-mid-ns">
		    <img src="img/fresh.jpg" alt="A bright blue sky" class="w-100 mw7 w5-ns" />
		  </div>
		  <div class="db dtc-ns v-mid ph2 pr0-ns pl3-ns">
		    <p class="lh-copy">
		      <h1>Fresh 2okg box of assorted fruits</h1>
		      <p>This is a 200kg bag of fresh assorted Fruits.</p>
		      <p><strong>GHS 250</strong></p>
		      <p>Farmer's Contact: <strong>0200864593</strong></p>
		    </p>
		    
	    	
		  </div>
		</div>

		<div class="mw6 center">
			<h3>Locate this farmer</h3>
		  <div id="map"></div>
		</div>
		<script>
	      function initMap() {
	        var uluru = {lat: 5.5557, lng: -0.1963};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 4,
	          center: uluru
	        });
	        var marker = new google.maps.Marker({
	          position: uluru,
	          map: map
	        });
	      }
	    </script>
	    <script async defer
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCg6hZoOfQXEI7vni4b9k_snPndBPfUds&callback=initMap">
	    </script>
	</body>
</html>