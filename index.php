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
	<article data-name="article-full-bleed-background">
	  <div class="cf" style="background: url(img/fresh.jpg) no-repeat center center fixed; background-size: cover;">
	    <div class="fl pa3 pa4-ns bg-white black-70 measure-narrow f3 times">
	      <header class="bb b--black-70 pv4">
	        <h3 class="f2 fw7 ttu tracked lh-title mt0 mb3">Find Fresh Produce from around Ghana.</h3>
	        <h4 class="f3 fw4 i lh-title mt0">Connect with awesome farmers</h4>
	      </header>
	      <section class="pt5 pb4">
	        <main class="pa4 black-80">
			    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">
			      <legend class="f4 fw6 ph0 mh0">Sign In</legend>
			      <div class="mt3">
			        <label class="db fw6 lh-copy f6" for="email-address">Email</label>
			        <input class="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="email" name="email-address"  id="email">
			      </div>
			      <div class="mv3">
			        <label class="db fw6 lh-copy f6" for="password">Password</label>
			        <input class="b pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="password" name="password"  id="password">
			      </div>
			      <label class="pa0 ma0 lh-copy f6 pointer"><input type="checkbox"> Remember me</label>
			    </fieldset>
			    <div class="">
			      <input class="f6 link dim br1 ph3 pv2 mb2 dib white bg-dark-blue" type="submit" value="Sign in" id="loginButton">
			    </div>
			    <div class="lh-copy mt3">
<!-- 			      <a href="#0" class="f6 link dim black db">Sign up</a>
 -->			      <a href="#0" class="f6 link dim black db">Forgot your password?</a>
			    </div>
	      </section>
	      <section class="pt5 pb4">
	        <main class="pa4 black-80">
			    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">
			      <legend class="f4 fw6 ph0 mh0">Sign Up</legend>
			      <div class="mt3">
			        <label class="db fw6 lh-copy f6" for="email-address">Email</label>
			        <input class="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="email" name="email-address"  id="email">
			      </div>
			      <div class="mt3">
			        <label class="db fw6 lh-copy f6" for="email-address">First Name</label>
			        <input class="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="text" name="name"  id="first_name">
			      </div>

			      <div class="mt3">
			        <label class="db fw6 lh-copy f6" for="email-address">Last Name</label>
			        <input class="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="email" name="name"  id="last_name">
			      </div>
			      <div class="mt3">
			        <label class="db fw6 lh-copy f6" for="email-address">Phone</label>
			        <input class="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="text" name="phone"  id="phone">
			      </div>
			      <div class="mv3">
			        <label class="db fw6 lh-copy f6" for="password">Password</label>
			        <input class="b pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="password" name="password"  id="password">
			      </div>
			      <label class="pa0 ma0 lh-copy f6 pointer"><input type="checkbox"> Remember me</label>
			    </fieldset>
			    <div class="">
			      <input class="f6 link dim br1 ph3 pv2 mb2 dib white bg-dark-blue" type="submit" value="Join" id="signUpButton">
			    </div>
			    <div class="lh-copy mt3">
<!-- 			      <a href="#0" class="f6 link dim black db">Sign up</a>
 -->			      <a href="#0" class="f6 link dim black db">Forgot your password?</a>
			    </div>
	      </section>
	    </div>
	  </div>
	</article>
	
	<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>