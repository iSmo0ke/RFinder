<?php 
    include './includes/header.php';
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="Icon" type="png" href='img/ico.jpg'>
    <link rel="stylesheet" href="../css/registro.css">
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-firestore.js"></script>
    <script src="guardar.js"></script>
    <script>
    
      var firebaseConfig = {
        apiKey: "AIzaSyDRplYQcLl5p6G1fW4IBAwbWgYKMnri9eM",
        authDomain: "route-finder-75a0b.firebaseapp.com",
        projectId: "route-finder-75a0b",
        storageBucket: "route-finder-75a0b.appspot.com",
        messagingSenderId: "833216771763",
        appId: "1:833216771763:web:cbaec2a9392817195222c6",
        measurementId: "G-HMMHJH8PPC"
      };
      firebase.initializeApp(firebaseConfig);
      const db = firebase.firestore();

      function registrarUsuario(event) {
        event.preventDefault(); 

        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var text = document.getElementById("nombre").value;

        firebase.auth().createUserWithEmailAndPassword(email, password)
          .then(function(userCredential) {
            console.log("Usuario registrado:", userCredential.user);
          })
          .catch(function(error) {
            console.error("Error al registrar el usuario:", error);
          });
      }
    </script>
  </head>
  <body class="container">
    <div class="contdos">
      <h2><b><center><font color="287094">Crea tu cuenta</font></center></b></h2><br> 
      <form onsubmit="registrarUsuario(event)">
        <div>
          <input type="text" id="nombre" placeholder="Nombre" class="espacio1">
          <br>
        </div>
        <div>
          <label for=""></label>
          <input type="email" id="email" placeholder="Correo electronico" class="espacio1"> <br>
          <br>  
        </div>
        <div>
          <input placeholder="Contraseña" type="password" name="password" id="password" class="espacio1">
          <br>
        </div>
        <br>
        <div>
          <label class="checkbox-label">
            <input type="checkbox" class="checkbox-custom">
            <font color="023246">Recordarme</font> 
          </label>
        </div> 
        <br>
        <br>
        <div>
          <div class="login">
          </div>
        
      </form>
      <button name="login" btn-lg class="stylebuttom" onclick="guardar()">
         Entrar
        </button>   
    </div>
  </div>
  </body>
</html>
