(function(){
	 var config = {
    apiKey: "AIzaSyCryDRbqVkxY6Yv6jXvsrjN1RWXA1dSYyc",
    authDomain: "farmconnectdemo.firebaseapp.com",
    databaseURL: "https://farmconnectdemo.firebaseio.com",
    projectId: "farmconnectdemo",
    storageBucket: "farmconnectdemo.appspot.com",
    messagingSenderId: "372131945646"
  };
  firebase.initializeApp(config);

  const txtEmail = document.getElementById('email');
  const txtPassword = document.getElementById('password');
  const loginButton = document.getElementById('loginButton');
  const signUpButton = document.getElementById('signUpButton');
  const first_name = document.getElementById('first_name');
  const last_name = document.getElementById('last_name');
  const phone = document.getElementById('phone');

  // Add login event
  loginButton.addEventListener('click', e => {

  	// Get email and password
  	const email = txtEmail.value;
  	const password = txtPassword.value;
  	const auth = firebase.auth();
  	// Sign In
  	const promise = auth.signInWithEmailAndPassword(email, password);

  	promise.catch(e => console.log(e.message));
    

  });

  // Add register event
  signUpButton.addEventListener('click', e => {
    const email = txtEmail.value;
    const password = txtPassword.value;
    const auth = firebase.auth();

    const promise = auth.createUserWithEmailAndPassword(email, password);
    promise.catch(e => console.log(e.message));

    firebase.auth().onAuthStateChanged(firebaseUser => {
      firebase.database().ref().child("User/" + firebaseUser.uid).push({
        FirstName: first_name.value,
        LastName: last_name.value,
        Phone: phone.value,
      });
    });
    
  });


  // Realtime listener
  firebase.auth().onAuthStateChanged(firebaseUser => {
  	if (firebaseUser) {
      console.log(firebaseUser)
  		window.location.href = "profile.php";
  	} else {
  		console.log('not Logged in');
  	}
  });


}());
