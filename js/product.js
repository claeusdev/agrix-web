$(document).ready(function () {
    var config = {
        apiKey: "AIzaSyCryDRbqVkxY6Yv6jXvsrjN1RWXA1dSYyc",
        authDomain: "farmconnectdemo.firebaseapp.com",
        databaseURL: "https://farmconnectdemo.firebaseio.com",
        projectId: "farmconnectdemo",
        storageBucket: "farmconnectdemo.appspot.com",
        messagingSenderId: "372131945646"
    };
    firebase.initializeApp(config);

    var prodID = location.search.split('p=')[1] ? location.search.split('p=')[1] : 'myDefaultValue';
    var productRef = firebase.database().ref().child('Products/' + prodID);
    // const dbRef = firebase.database().ref().child("Products/").child(prodID);

    productRef.on('value', snap => {
        var name = snap.child("Product_Name").val();
        var description = snap.child("Description").val();
        var price = snap.child("Price").val();
        var location = snap.child("Location").val();
        var farm_name = snap.child("Farm_Name").val();
        var quantity = snap.child("Quantity").val();
        var video = snap.child("Video").val();
        var image = snap.child("Image").val();
        var video = snap.child("Video").val();
        const productShow = document.getElementById('productShow');
        console.log(snap.child("Product_Name").val());
        $("#img").append('<img src="'+image+'" alt="A bright blue sky" class="w-100 mw7 w5-ns"/>');
        $("#desc").append('<p>'+description+'</p>');
        $("#prodName").append('<h1>'+name+'</h1>');
    });
});
