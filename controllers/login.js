var firebaseConfig = {
    apiKey: "AIzaSyDRplYQcLl5p6G1fW4IBAwbWgYKMnri9eM",
    authDomain: "route-finder-75a0b.firebaseapp.com",
    projectId: "route-finder-75a0b",
    storageBucket: "route-finder-75a0b.appspot.com",
    messagingSenderId: "833216771763",
    appId: "1:833216771763:web:cbaec2a9392817195222c6",
    measurementId: "G-HMMHJH8PPC"
};
firebase.initializeApp(firebaseConfig);

function iniciarSesion(event) {
    event.preventDefault();

    var email = document.getElementById("login-email").value;
    var password = document.getElementById("login-password").value;

    firebase.auth().signInWithEmailAndPassword(email, password)
        .then(function (userCredential) {
            alert("Inicio de sesión exitoso");
            document.getElementById("loginForm").reset();
            window.location.href='/RF-PHP/public/views/mapa.php'
        })
        .catch(function (error) {
            alert("El correo o contaseña no coinciden");
            console.error("Error al iniciar sesión:", error);
            
        });
}

//Cerrar sesion
function cerrarSesion() {
    firebase.auth().signOut().then(function() {
        window.location.href = '/RF-PHP/public/index.php';
        alert("Sesión cerrada exitosamente");
    }).catch(function(error) {
        // An error happened.
        console.error("Error al cerrar sesión:", error);
    });
}
