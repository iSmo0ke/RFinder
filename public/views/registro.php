<?php
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link rel="Icon" type="png" href='/RF-PHP/assets/img/icono.jpg'>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Scripts firebase -->
  <script src="../../controllers/registro.js"></script>
  <script src="/RF-PHP/controllers/authblock.js"></script> <!-- Incluye el archivo auth.js -->
  <script>
    // Verifica la autenticación cuando la página carga
    verificarAutenticacionBlock();
  </script>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body class="text-center">
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <form onsubmit="registrarUsuario(event)" class="form-signin col-sm-5 m-5" id="registroForm">
      <img class="mb-4" src="../assets/img/icono.jpg" alt="" width="150" height="150">
      <h1 class="h3 mb-3 font-weight-normal">Crea una cuenta nueva!</h1>

      <label for="inputEmail" class="sr-only">Correo electronico</label>
      <input type="email" id="registro-email" class="form-control" placeholder="Correo electronico" required autofocus>

      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="registro-password" class="form-control" placeholder="Contraseña" required>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
    </form>
  </div>


  <?php
  include '../includes/footer.php';
  ?>

</body>

</html>