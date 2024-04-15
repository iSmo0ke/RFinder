<?php
include '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/login.css">
    <!-- Boostrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <!-- Firebase Scripts -->
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-firestore.js"></script>
    <script src="../controllers/login.js"></script>
    <script src="../controllers/recuperar.js"></script>
    <script src='../controllers/miCuenta.js'></script>
    <script src="../controllers/authblock.js"></script> <!-- Incluye el archivo auth.js -->
  <script>
    // Verifica la autenticación cuando la página carga
    verificarAutenticacionBlock();
  </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body class="text-center">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form onsubmit="iniciarSesion(event)" class="form-signin col-sm-5 m-5" id="loginForm">
            <img class="mb-4" src="../assets/img/icono.jpg" alt="" width="150" height="150">
            <h1 class="h3 mb-3 font-weight-normal">Inicia Sesion!</h1>

            <label for="inputEmail" class="sr-only">Correo electronico</label>
            <input type="email" id="login-email" class="form-control" placeholder="Correo electronico" required
                autofocus>

            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" id="login-password" class="form-control" placeholder="Contraseña" required>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Recordar
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
            <button class="opacidad container d-flex justify-content-center align-items-center" data-toggle="modal"
    data-target="#recuperaContraseña" type="button">¿Olvidaste tu contraseña?</button>

        </form>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="recuperaContraseña" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Recuperar contraseña</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <label for="inputEmail" class="sr-only">Correo electronico</label>
                        <input type="email" id="recuperarContraseña" class="form-control" placeholder="Correo electronico"
                            required autofocus>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="enviarCorreoRecuperacion()">Enviar correo de recuperación</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>



<?php
include '../includes/footer.php';
?>