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

function registrarUsuario(event) {
    event.preventDefault();

    var email = document.getElementById("registro-email").value;
    var password = document.getElementById("registro-password").value;

    firebase.auth().createUserWithEmailAndPassword(email, password)
        .then(function (userCredential) {
            alert ("Registro Exitoso");
            document.getElementById("registroForm").reset();
            window.location.href='/views/mapa.php'
        })
        .catch(function (error) {
            alert ("Error: este correo ya esta registrado, ingresa con tu correo y contraseña");
            window.location.href='/views/login.php'
        });
}