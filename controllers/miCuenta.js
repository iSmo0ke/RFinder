// Espera a que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", function() {
    // Registra un observador de cambio de estado de autenticación
    firebase.auth().onAuthStateChanged(function(usuario) {
        // Si hay un usuario autenticado y tiene un correo electrónico
        if (usuario && usuario.email) {
            // Obtén el elemento <h5> con el id "correoUsuario"
            var correoUsuarioElemento = document.getElementById("correoUsuario");

            // Actualiza el contenido del elemento con el correo electrónico del usuario
            correoUsuarioElemento.textContent = "Correo: " + usuario.email;
        } else {
            // Si no hay un usuario autenticado o no tiene correo electrónico, muestra un mensaje alternativo
            console.log("No hay usuario autenticado o no se proporcionó un correo electrónico.");
        }
    });
});


