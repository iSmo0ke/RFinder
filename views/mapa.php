<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Finder</title>
    <link rel="stylesheet" href="../css/maps2.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="Icon" type="png" href='img/ico.jpg'>
    <script src="Busqueda.php"></script>
</head> 
<body style=" background-color: #023246;">
    
    <div>
        <header class="header">
            <div class="container">
                <div class="btn-menu">
                    <label for="btn-menu" class="icon-menu"></label>
                </div>
                <div class="logo">
                    <h1>Route Finder</h1>
                </div>
                <nav class="menu">
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </nav>
            </div>
        </header>
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <a href="#" <span class="icon-user">Mi perfil</span> </a>
                    <a href="./index.html" <span class="icon-home">Inicio</span> </a>
                    <a href="#" <span class="icon-cog">Configuración</span> </a>
                    <a href="#" <span class="icon-info-circled">Nosotros</span> </a>
                    <a href="#" <span class="icon-help-circled">Ayuda</span> </a>
                    <a href="#" <span class="icon-instagram">Redes Sociales</span> </a>
                </nav>
                <label for="btn-menu" class="icon-cancel"></label>
            </div>   
        </div>
    </div>

    <div class="map-container">
        <iframe src="https://www.google.com/maps/d/u/2/embed?mid=11SJ35p3-fvnGVlYEPxuxgz2XjPGwff4&ehbc=2E312F" width="100%" height="250%"></iframe>
    </div>





    <div id="resultados">

    </div>
</body>
</html>