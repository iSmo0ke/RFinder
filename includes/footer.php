<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="Icon" type="png" href='/RF-PHP/assets/img/icono.jpg'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <!-- footer.php -->

    <footer class="footer bg-dark text-light">
        <div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Información de contacto</h5>
                    <p>Correo electrónico: contacto@tudominio.com</p>
                    <p>Teléfono: +52 2381699563</p>
                </div>
                <div class="col-md-4">
                    <h5>Enlaces útiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Política de privacidad</a></li>
                        <li><a href="#">Aviso legal</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Tus comentarios son importantes</h5>
                    <ul class="list-unstyled">
                        <li><a href='./views/comentarios.php'>Dejar comentario</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="text-center">&copy; <?php echo date("d/m/Y"); ?> Route Finder</p>
        </div>
    </footer>
</body>

</html>