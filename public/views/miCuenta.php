<?php
include '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi cuenta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-firestore.js"></script>
    <script src="../controllers/login.js"></script>
    <script src='../controllers/auth.js'></script>
    <script src='../controllers/miCuenta.js'></script>
    <script>verificarAutenticacion();</script>

    
    
    <!-- Scripts de Bootstrap (jQuery primero, luego Popper.js, luego Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center m-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Mi información
                    </div>
                    <div class="card-body">
                        <p class="card-text" id="correoUsuario"></p>
                        <a href="#" class="btn btn-primary" onclick="enviarCorreoRestablecerContraseña()">Cambiar contraseña</a>
                        <a href="#" class="btn btn-danger" onclick="cerrarSesion()">Cerrar Sesion</a>
                        <tbody id="infoCuenta"></tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src='../controllers/recuperarMiCuenta.js'></script>

</html>

<?php
include '../includes/footer.php';
?>