// Función para enviar el correo electrónico de restablecimiento de contraseña
function enviarCorreoRecuperacion() {
    // Obtener el correo electrónico ingresado por el usuario
    var email = document.getElementById('recuperarContraseña').value;
    
    // Verificar si el correo electrónico es válido
    if (email) {
        // Enviar el correo electrónico de restablecimiento de contraseña
        firebase.auth().sendPasswordResetEmail(email)
            .then(function() {
                // Correo electrónico enviado correctamente
                alert("Se ha enviado un correo electrónico para restablecer la contraseña.");
                location.reload();
            })
            .catch(function(error) {
                // Error al enviar el correo electrónico
                console.error("Ocurrió un error al enviar el correo electrónico:", error);
                alert("El correo ingresado no esta registrado, registrate en la siguiente ventana!");
                window.location.href = '/views/registro.php';
            });
    } else {
        // El campo de correo electrónico está vacío
        alert("Por favor, ingrese su correo electrónico.");
    }
}