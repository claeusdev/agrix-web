$(document).ready(function() {
	 var config = {
    apiKey: "AIzaSyCryDRbqVkxY6Yv6jXvsrjN1RWXA1dSYyc",
    authDomain: "farmconnectdemo.firebaseapp.com",
    databaseURL: "https://farmconnectdemo.firebaseio.com",
    projectId: "farmconnectdemo",
    storageBucket: "farmconnectdemo.appspot.com",
    messagingSenderId: "372131945646"
  };
  firebase.initializeApp(config);
  // Defined variables and getting the current user
  // var user = firebase.auth().currentUser;
  // if (user) {
  //   var userId = user.uid;
  // }

  var welcome = document.getElementById('welcome');
  const productName = document.getElementById('name');
  const productDesc = document.getElementById('description');
  const productPrice = document.getElementById('price');
  const productForm = document.getElementById('productForm');
  const itemQuantity = document.getElementById('quantity');
  const itemFarm = document.getElementById('farm_name');
  const itemLocation = document.getElementById('location');
  const itemCategory = document.getElementById('category');
  // Logout Functionality
  const logoutButton = document.getElementById('logoutButton');
  const productsSection = document.getElementById('productsSection');

  var user = firebase.auth().currentUser;
  var name;
  if (user != null) {
    name = user.displayName;
  }
  welcome.append('welcome, <em>'+name+'</em>');
  logoutButton.addEventListener('click', e => {
  	console.log("trying to logout");
  	firebase.auth().signOut();
  	window.location.href = "index.php";
  });

  firebase.auth().onAuthStateChanged((firebaseUser) => {
    console.log(firebaseUser.uid);
     // Creating reference
    var userId = firebaseUser.uid;
    var database = firebase.database();
    function guid() {
      return s4();
    }

    function s4() {
      return Math.floor((1 + Math.random()) * 0x10000)
        .toString(16)
        .substring(1);
    }
    var uuid = guid();

    function writeData(data){
      
      firebase.database().ref().child("Products").push({
        Product_Name: data.Product_Name,
        Description: data.Description,
        Price: data.Price,
        Quantity: data.Quantity,
        Category: data.Category,
        Farm_Name: data.Farm_Name,
        Location: data.Location,
        UserID: data.UserID,
        Image: data.Image,
        Video: data.Video
      });
      console.log(data);
    }

    productForm.onsubmit = function(e){
      e.preventDefault();
      selectedFile = document.getElementById("image").files[0];
      var selectedVideo = document.getElementById("video").files[0];
      var filename = selectedFile.name;
      var videoName = selectedVideo.name;
      var vidRef = firebase.storage().ref.ref('/Products_Videos/' + videoName);
      var storageRef = firebase.storage().ref('/Products_Images/' + filename);
      console.log(filename);
      storageRef.put(selectedFile).then(function (snapshot) {
        var productKey = firebase.database().ref("Products").push().key;
        var downloadURL = snapshot.downloadURL;
        
        // var updates = {};
        var productData = {
          Product_Name: productName.value,
          Description: productDesc.value,
          Price: productPrice.value,
          Quantity: itemQuantity.value,
          Category: itemCategory.value,
          Farm_Name: itemFarm.value,
          Location: itemLocation.value,
          UserID: firebaseUser.uid,
          Image: downloadURL,
          Video: vidDownloadURL
        }

         writeData(productData);

        // updates["/Products/"+ productKey] = productData;
        // firebase.database().ref().update(updates);
        // console.log()


      });  
    }

    
    // pic.addEventListener("change", function(e){
    //   selectedFile = e.target.files[0];
      
      
    // });

    
    const dbRef = firebase.database().ref().child("Products");

    dbRef.on("child_added", snap => {

      // alert(snap.val());

      var name =  snap.child("Product_Name").val();
      var description = snap.child("Description").val();
      var price = snap.child("Price").val();
      var location = snap.child("Location").val();
      var farm_name = snap.child("Farm_Name").val();
      var quantity = snap.child("Quantity").val();
      var video = snap.child("Video").val();
      var image = snap.child("Image").val();
      var video = snap.child("Video").val();

      var productsSection = $("#productsSection");
      productsSection.append(
        '<article><a class="link dt w-100 bb b--black-10 pb2 mt2 dim blue" href="#0"><div class="dtc w3"><img src="'+image+'" class="db w-100"/></div<div class="dtc v-top pl2"><h1 class="f6 f5-ns fw6 lh-title black mv0"><a href="product.php?p=">'+name+'</a></h1><h2 class="f6 fw4 mt2 mb0 black-60"></h2><dl class="mt2 f6"><dt class="clip">Price</dt><dd class="ml0">'+price+'</dd><dd class="ml0">'+location+'</dd></dl></div></div></article>');
    });
    
  });

  // '<article class="br2 ba dark-gray b--black-10 mv4 w-100 w-50-m w-25-l mw5 center"><img src="'+image+'" class="db w-100 br2 br--top" alt="Photo of a kitten looking menacing."><div class="pa2 ph3-ns pb3-ns"><div class="dt w-100 mt1"><div class="dtc"><h1 class="f5 f4-ns mv0">'+name+'</h1></div><div class="dtc tr"><h2 class="f5 mv0">'+price+'</h2> </div></div><p class="f6 lh-copy measure mt2 mid-gray">'+price+'</p></div></article>'
  // Sync the object
});


              
                
              
              