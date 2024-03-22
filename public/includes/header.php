<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="Icon" type="png" href='/RF-PHP/public/assets/img/icono.jpg'>
  <link rel="stylesheet" href="./css/fonts.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <style>
    .navbar-brand img {
      width: 150px; /* Ancho del logo */
      height: auto; /* Altura ajustada automáticamente */
      margin-right: 10px; /* Espacio entre el logo y el texto */
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="../index.php">
    <img src="/RF-PHP/public/assets/img/logo.jpg" alt="Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="/RF-PHP/public/index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/RF-PHP/public/views/registro.php">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/RF-PHP/public/views/login.php">Inicio de Sesión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/RF-PHP/public/views/mapa.php">Rutas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/RF-PHP/public/views/acount.php">Mi Cuenta</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Scripts de Bootstrap (jQuery primero, luego Popper.js, luego Bootstrap JS) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z24KtnAOWrvr5K/XF3Db/8EyJ6G5QbRBm4L1f3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-QkBNvoEfeCjcO2GmAlly5+nyLdERyB/3z1A7p4ggtXNy7Nk21lvbKYFaFsn8rh/o" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-HZR4j/1q+YjyuLYz0B5Kf7sTk7Pn4K/J/2xXKzKO6IkgMSjDmeZy5GKXI79SjiV4" crossorigin="anonymous"></script>

</body>
</html>
