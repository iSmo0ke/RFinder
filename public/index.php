<?php include './includes/header.php'; ?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Finder</title>
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="Icon" type="png" href='/RF-PHP/assets/img/icono.jpg'>
    <style>
        /* Estilos para el contenedor principal */
        .container {
            background-image: url('/RF-PHP/public/assets/img/index.jpg');
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            margin: 0%;
            width: 100%;
            max-width: 1550px;
            height: 100%;
            padding: 0;
        }

        footer {
            box-sizing: border-box;
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        /* Estilos para hacer los artículos más responsivos */
        .fichaTxt {
            margin: 20px;
        }

        @media (max-width: 768px) {
            .fichaTxt {
                margin: 10px;
            }
        }

        /* Estilos para el fondo gris del texto */
        .texto-container {
            background-color: #f2f2f2; /* Color de fondo gris */
            padding: 20px; /* Espaciado interior */
            border-radius: 10px; /* Bordes redondeados */
            max-width: 75%; /* Ancho máximo del contenedor */
            margin:0; /* Centra el contenedor */
        }

        /* Estilos para el texto */
        .texto {
            font-size: 20px;
            font-family: 'RobotoSub', sans-serif;
            margin: 0; /* Elimina el margen predeterminado */
        }

        /* Estilos para el título */
        .titulo {
            font-size: 100px;
            font-family: 'Roboto', sans-serif;
            margin-top: 30%;
        }
    </style>
</head>

<body>

    <div class="container">
        <div>
            <h1 class="titulo">Route Finder</h1>
            <div class="descripcionTxt">
                <!-- Contenedor del texto con fondo gris -->
                <div class="texto-container">
                    <p class="texto">Proporciona soluciones de localización facilitando los
                        localización facilitando los desplazamientos diarios de
                        las personas que usan transporte público por la ciudad
                        a través de una plataforma tecnológica innovadora y accesible.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="cardsContenedor">
            <h2>¿Cómo funciona?</h2>
            <div class="row">
                <div class="col-md-auto">
                    <article class="fichaTxt">
                        <h3>Encuentra tu destino</h3>
                        <p>Por medio de una barra de búsqueda, podrás ingresar al lugar que vas.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="fichaTxt">
                        <h3>Visualiza el trayecto de la ruta</h3>
                        <p>Mediante un mapa, se mostrará el trayecto que recorre el transporte.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="fichaTxt">
                        <h3>Elige tu mejor opción</h3>
                        <p>Escoge la ruta que te sea más accesible al momento y empieza a ver su recorrido</p>
                    </article>
                </div>
            </div>
        </section>
    </div>

    <?php include './includes/footer.php'; ?>

</body>

</html>
