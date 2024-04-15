// Función para enviar el correo electrónico de restablecimiento de contraseña y cerrar sesión
function enviarCorreoRestablecerContraseña() {
    var usuario = firebase.auth().currentUser;
    if (usuario) {
        var correoUsuario = usuario.email;
        firebase.auth().sendPasswordResetEmail(correoUsuario)
            .then(function() {
                // Correo electrónico enviado
                alert("Se ha enviado un correo electrónico para restablecer la contraseña.");

                // Cerrar sesión después de enviar el correo electrónico
                firebase.auth().signOut().then(function() {
                    // Redirigir a la página de inicio de sesión
                    window.location.href = '/index.php';
                }).catch(function(error) {
                    // Error al cerrar sesión
                    console.error("Error al cerrar sesión:", error);
                });
            })
            .catch(function(error) {
                // Error al enviar el correo electrónico
                console.error("Ocurrió un error al enviar el correo electrónico:", error);
                alert("Ocurrió un error al enviar el correo electrónico.");
            });
    } else {
        // No hay usuario autenticado
        console.log("No hay usuario autenticado.");
    }
}