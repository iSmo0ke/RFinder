<?php
include './includes/header.php';
?>

<!-- index.php -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Finder</title>
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="Icon" type="png" href='/RF-PHP/assets/img/icono.jpg'>
    <style>
        /* Estilos para el contenedor principal */
        .container{
            background-image: url('/RF-PHP/assets/img/index.jpg');
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment:fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            margin: 0%;
            width: 100%;
            max-width: 1550px;
            height: 100%;
            padding: 0;
        }
    </style>

</head>

<body>

    <div class="container">
        <div>
            <h1 class="titulo">Route Finder</h1>
            <div class="descripcionTxt">
                <p class="texto"> Proporciona soluciones de localización facilitando los
                    localización facilitando los desplazamientos diarios de
                    las personas que usan transporte público por la ciudad
                    a través de una plataforma tecnológica innovadora y accesible.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="cardsContenedor">
            <h2>¿Como Funciona?</h2>
            <div>
                <article class="fichaTxt">         
                    <h3>Encuentra tu destino</h3>
                    <br>
                    <br>
                    <p>Por medio de una barra de busqueda, podrás ingresar al lugar que vas.</p>
                </article>
                <article class="fichaTxt">                
                    <h3>Visualiza el trayecto de la ruta</h3>
                    <br>
                    <p>Mediante un mapa, se mostrara el trayecto que recorre el transporte.</p>
                </article>
                <article class="fichaTxt">
                    <h3>Elige tu mejor opción</h3>
                    <br>
                    <br>
                    <p>Escoge la ruta que te sea mas accesible al momento y empieza a ver su recorrido</p>
                </article>
            </div>
        </section>
    </div>

</body>

</html>

<?php
include './includes/footer.php';
?>





<!-- </html>
=======
                

        <footer id="contacto">
            <div class="contenedor">
                <h2 class="titulo">Comentarios</h2>
                <form action="" class="form">
                    <input class="input"  type="text" name="" id="" placeholder="Nombre">
                    <input class="input"  type="email" name="" id="" placeholder="Email">
                    <textarea  class="input" name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                    <input class="input"  type="submit" value="Enviar">
                </form>
            </div>
        </footer>




        <div class="options">
            <a href="./index.php" class="stylebutton1">Inicio</a>
            <a href="" class="stylebutton1">Comentarios</a>
            <a href="./views/mapa.php" class="stylebutton1">Entrar</a>
        </div>



    </body>
</html> -->