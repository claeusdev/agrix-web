<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to FarmConnect</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">
		<link rel="stylesheet" href="css/app.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>
	<body>
		<h3 id="welcome"></h3>
	
		<article class="cf ph3 ph5-ns pv5">
		  <div class="fn fl-ns w-50-ns pr4-ns">
	  	 	<input class="f6 link dim br1 ph3 pv2 mb2 dib white bg-dark-blue" type="submit" value="Log Out" id="logoutButton">
		  	<h3>Add your products</h3>	
				<form id="productForm" method="post">
					<div class="measure mv3">
						<label for="name" class="db fw4 lh-copy f6">Give your product a name/title</label>
						<input type="text" placeholder="Product name" id="name" class="input-reset ba b--black-20 pa2 mb2 db w-100">
					</div>
					<div class="measure mv3">
						<label for="description" class="db fw4 lh-copy f6">Give good description of your product</label>
						<input type="text" placeholder="description" id="description" class="input-reset ba b--black-20 pa2 mb2 db w-100">
					</div>
					<div class="measure mv3">
						<label for="price" class="db fw4 lh-copy f6">Give your product a price</label>
						<input type="number" placeholder="what's your items price" id="price" class="input-reset ba b--black-20 pa2 mb2 db w-100">
					</div>

					<div class="measure mv3">
						<label for="price" class="db fw4 lh-copy f6">Location of your farm</label>
						<input type="text" placeholder="Where is your farm located" id="location" class="input-reset ba b--black-20 pa2 mb2 db w-100">
					</div>

					<div class="measure mv3">
						<label for="price" class="db fw4 lh-copy f6">Quantity of item</label>
						<input type="number" value="1" id="quantity" class="input-reset ba b--black-20 pa2 mb2 db w-100">
					</div>

					<div class="measure mv3">
						<label for="price" class="db fw4 lh-copy f6">Select a Category</label>
						<input type="text" placeholder="Select a product category" id="category" class="input-reset ba b--black-20 pa2 mb2 db w-100">
					</div>

					<div class="measure mv3">
						<label for="price" class="db fw4 lh-copy f6">Select a Category</label>
						<input type="text" placeholder="Name of your farm" id="farm_name" class="input-reset ba b--black-20 pa2 mb2 db w-100">
					</div>

					<div class="measure mv3">
						<label for="image" class="db fw4 lh-copy f6">Please add a display image to your product.</label>
						<input type="file" id="image">
					</div>

					<div class="measure mv3">
						<label for="video" class="db fw4 lh-copy f6">Please add an optional video.</label>
						<input type="file" id="video">
					</div>

					<div class="measure mv3">
						<label for="audio" class="db fw4 lh-copy f6">Please add an optional audio recoding about your product.</label>
						<input type="file" id="audio">
					</div>
					<br>
					<input type="submit" class="f6 link dim br1 ph3 pv2 mb2 dib white bg-dark-blue">
				</form>
		  </div>
		  <div class="fn fl-ns w-50-ns">
		  	<h4>Available Products</h4>
      	<div id="productsSection">
					
				</div>
			</div>
		</article>
		

		
		<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/profile.js"></script>

	</body>
</html>
