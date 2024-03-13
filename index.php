<?php 
    include './includes/header.php';
; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>ROUTE FINDER</title>
        <link rel="stylesheet" href="./css/index.css">
        <link rel="Icon" type="png" href='img/ico.jpg'>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
    </head>

    <body >
        <div class="container">
        <div class="right">

            <div class="title">
                <h1 class="bold">ROUTE </h1>
                <h1 class="slim">FINDER</h1>
            </div>
    
            <div class="text-cuadro">
                <p class="text">Proporciona soluciones de 
                    localización facilitando los 
                    desplazamientos diarios de las
                    personas que usan transporte
                    público por la ciudad a través de una
                    plataforma tecnológica innovadora y accesible.
                </p>
            </div>
            
            <div class="buttons">
                <div class="links">
                    <a href="./views/registro.php" class="choose">Registrate</a>
                </div>
                <div class="links2">
                    <a href="./views/mapa.php" class="choose1" >Continuar sin registro</a>
                </div>
            </div>
        </div>
        </div>
        

        <section class="cards contenedor">
            <h2 class="titulo">¿Como Funciona?</h2>
            <div class="content-cards">
                <article class="card">
                    <i class="far fa-clone"></i>
                    <h3>Encuentra tu destino</h3>
                    <br>
                    <br>
                    <p>Por medio de una barra de busqueda, podrás ingresar al lugar que vas.</p>
                </article>

                <article class="card">
                    <i class="fas fa-database"></i>
                    <h3>Visualiza el trayecto de la ruta</h3>
                    <br>
                    <p>Mediante un mapa, se mostrara el trayecto que recorre el transporte.</p>
                </article>

                <article class="card">
                    <i class="far fa-object-group"></i>
                    <h3>Elige tu mejor opción</h3>
                    <br>
                    <br>
                    <p>Escoge la ruta que te sea mas accesible al momento y empieza a ver su recorrido</p>
                </article> 
            </div>
        </section>

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
</html>
