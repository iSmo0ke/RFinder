<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Finder</title>
    
    <link rel="icon" type="image/png" href="/assets/img/icono.jpg">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/includes.css">
    <link rel="stylesheet" href="/css/index.css">

    <style>
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar-brand img {
            width: 150px;
            height: auto;
            transition: transform 0.3s ease;
        }
        .navbar-brand img:hover {
            transform: scale(1.05);
        }
        .nav-link {
            font-size: 0.95rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: color 0.3s ease;
            margin-left: 10px;
        }
        .nav-link:hover {
            color: #007bff !important; 
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="/index.php">
                <img src="/assets/img/RF-IMG.png" alt="Logo Route Finder">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/index.php">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/views/registro.php">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/views/login.php">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/views/mapa.php">Rutas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/views/miCuenta.php">Mi cuenta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>