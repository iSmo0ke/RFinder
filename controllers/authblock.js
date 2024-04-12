function verificarAutenticacionBlock() {
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            // El usuario está autenticado, permitir el acceso
            alert ("Actualmente cuentas con una sesión iniciada");
            window.location.href='/RF-PHP/public/views/mapa.php'
        }
    });
}