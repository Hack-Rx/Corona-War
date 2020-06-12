
  var firebaseConfig = {
    apiKey: "AIzaSyDj2YripvJN9IBi94TffvkJut9Z1Gjqfj8",
    authDomain: "corona-tracker-22cc2.firebaseapp.com",
    databaseURL: "https://corona-tracker-22cc2.firebaseio.com",
    projectId: "corona-tracker-22cc2",
    storageBucket: "corona-tracker-22cc2.appspot.com",
    messagingSenderId: "734879244308",
    appId: "1:734879244308:web:57f8ab2ce275235e578701",
    measurementId: "G-J9SHDD94QW"
  };
  
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

function getdata() {

  var user = document.getElementById("user").value;

  firebase.database().ref('/messages/'+user).once('value').then(function (snapshot) {

    var names= (snapshot.val() && snapshot.val().corona)
    var genders=(snapshot.val() && snapshot.val().hospital)
    var ages=(snapshot.val() && snapshot.val().doctor)


    document.getElementById("names").innerHTML=names;
    document.getElementById("genders").innerHTML=genders;
    document.getElementById("ages").innerHTML=ages;
  })



}

