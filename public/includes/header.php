<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Route Finder</title>
  <link rel="Icon" type="png" href='/RF-PHP/public/assets/img/icono.jpg'>
  <link rel="stylesheet" href="./css/fonts.css">
  <link rel="stylesheet" href="../css/includes.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <style>
    .navbar-brand img {
      width: 150px;
      /* Ancho del logo */
      height: auto;
      /* Altura ajustada automáticamente */
      margin-right: 10px;
      /* Espacio entre el logo y el texto */
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="/RF-PHP/public">
      <img src="/RF-PHP/public/assets/img/RF-IMG.jpg" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="/RF-PHP/public/index.php">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/RF-PHP/public/views/registro.php">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/RF-PHP/public/views/login.php">Ingresar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/RF-PHP/public/views/mapa.php">Rutas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href='/RF-PHP/public/views/miCuenta.php'>Mi cuenta</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Firebase -->
  <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-firestore.js"></script>
  <script src="../../controllers/registro.js"></script>
  <!-- Scripts de Bootstrap (jQuery primero, luego Popper.js, luego Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>