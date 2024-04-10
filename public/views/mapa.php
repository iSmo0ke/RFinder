<?php
include '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Finder</title>
    <link rel="Icon" type="png" href='img/ico.jpg'>
    <script src='/RF-PHP/controllers/auth.js'></script>
    <script>verificarAutenticacion();</script>
    <!-- Agregar Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .map-container {
            height: 70vh;
            /* Cambiar altura del mapa para que ocupe el 70% de la altura de la pantalla */
        }
    </style>
</head>

<body>
    <div class="container-fluid m-0">
        <!-- Botones para cambiar el mapa -->
        <div class="row">
            <div class="col-md-2 m-3">
                <button class="btn btn-primary btn-block" onclick="cambiarMapa('mapa1')">Mapa 1</button>
            </div>
            <div class="col-md-2 m-3">
                <button class="btn btn-primary btn-block" onclick="cambiarMapa('mapa2')">Mapa 2</button>
            </div>
            <div class="col-md-2 m-3">
                <button class="btn btn-primary btn-block" onclick="cambiarMapa('mapa3')">Mapa 3</button>
            </div>
            <div class="col-md-3 m-3">
                <button class="btn btn-primary btn-block" id="downloadButton">Descarga nuestra app móvil</button>
            </div>
        </div>
        <!-- Contenedor del mapa -->
        <div class="col-lg-12">
            <div class="embed-responsive embed-responsive-16by9"
                style="max-width: 100%; max-height: 500px; min-width: 200px; min-height: 450px;">
                <iframe class="embed-responsive-item" id="mapa1"
                    src='https://www.google.com/maps/d/embed?mid=1aRY6IAXcA3quC_3DkJPZ6hwJI3xVMtk&ehbc=2E312F'></iframe>
            </div>
        </div>

    </div>


    <!-- Agregar Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Función para cambiar el mapa en el iframe
        function cambiarMapa(mapaId) {
            var iframe = document.getElementById('mapa1');
            // Cambiar la URL del mapa en el iframe según el mapa seleccionado
            switch (mapaId) {
                case 'mapa1':
                    iframe.src = 'https://www.google.com/maps/d/embed?mid=1aRY6IAXcA3quC_3DkJPZ6hwJI3xVMtk&ehbc=2E312F';
                    break;
                case 'mapa2':
                    iframe.src = 'https://www.google.com/maps/d/embed?mid=11SJ35p3-fvnGVlYEPxuxgz2XjPGwff4&ehbc=2E312F';
                    break;
                case 'mapa3':
                    iframe.src = 'https://www.google.com/maps/d/embed?mid=1DLOu9GDx2s9A-LxH0Xi5s0v_7A89xVg&ehbc=2E312F';
                    break;
                default:
                    break;
            }
        }
    </script>
    <script>
        document.getElementById('downloadButton').addEventListener('click', function () {
            window.location.href = '/RF-PHP/Route Finder.apk';
        });
    </script>

    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>