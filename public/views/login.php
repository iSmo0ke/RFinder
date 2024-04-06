<?php 
    include '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <!-- Boostrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Firebase Scripts -->
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
    </script>
    <!-- Mi codigo -->
    <script src="../../controllers/login.js"></script>
</body>
</html>



<?php
include '../includes/footer.php';
?>