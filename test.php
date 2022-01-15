<!DOCTYPE HTML>
<html>
<head>
<title>Firebase Testing</title>
<script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
</head>
<body>

<h1>Test Firebase</h1>
<form method="POST" class="test">

<input name="name" id="name" type="text" placeholder="enter text">
<button type="submit" >submit</button>
</form>

<script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCtRylv2G8yq0GMaoP6p0eWssAWpgAUOcI",
    authDomain: "cr07-e2cc6.firebaseapp.com",
    databaseURL: "https://cr07-e2cc6-default-rtdb.firebaseio.com",
    projectId: "cr07-e2cc6",
    storageBucket: "cr07-e2cc6.appspot.com",
    messagingSenderId: "426855223976",
    appId: "1:426855223976:web:09d6385ee96ddf94e4289d",
   // measurementId: "G-7FJGDNWKQ4"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
 // firebase.analytics();
 
 
 // Reference messages collection
  var messagesRef = firebase.database().ref("messagesFromUsers");
  
  // Listen for form submit
document.querySelector('.test').addEventListener('submit', submitForm);
  
  // Submit form
  function submitForm(e){
    e.preventDefault();
  
    // Get values
    var name = getInputVal('name');
    
  
    // Save message
    saveMessage(name);
  
    // Show alert
    //document.querySelector('.alert').style.display = 'block';
  
    // Hide alert after 3 seconds
    //setTimeout(function(){
      //document.querySelector('.alert').style.display = 'none';
    //},3000);
  
    // Clear form
    document.querySelector('.test').reset();
  }
  
  // Function to get get form values
  function getInputVal(id){
    return document.getElementById(id).value;
  }
  
  // Save message to firebase
  function saveMessage(name){
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
      name: name
    
    });
  }

 
 
</script>

</body>
</html>