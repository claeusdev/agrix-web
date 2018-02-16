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
		<article id="productShow">
			<div class="dt mw6 center pt0 pv5-m pv6-ns">
		  <div class="db dtc-ns v-mid-ns" id="img">
		    
		  </div>
		  <div class="db dtc-ns v-mid ph2 pr0-ns pl3-ns">
		    <p class="lh-copy">
		      <h1 id="prodName"></h1>
		      <p id="desc"></p>
		      <p id="price"></p>
		      <p id="farmName"></p>
		    </p>
		  
		  </div>
		</div>

		<div class="mw6 center">
			<h3>Locate this farmer</h3>
		  <div id="map"></div>
		</div>
		</article>
		
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
			<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/product.js?ver<%=DateTime.Now.Ticks.ToString()%>"></script>
	</body>
</html>
