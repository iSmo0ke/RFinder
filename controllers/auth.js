// auth.js

// Función para verificar el estado de autenticación del usuario
function verificarAutenticacion() {
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            // El usuario está autenticado, permitir el acceso
            console.log("El usuario está autenticado");
        } else {
            // El usuario no está autenticado, redirigirlo a la página de inicio de sesión
            console.log("El usuario no está autenticado, redirigiendo a la página de inicio de sesión");
            window.location.href = '/RF-PHP/public/views/login.php';
        }
    });
}
