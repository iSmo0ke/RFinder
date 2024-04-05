//Inicializar firestore
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
var db = firebase.firestore();

//Funcion para registrar comentarios
function registrarComentario(event) {
    event.preventDefault();

    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;
    var comment = document.getElementById("comment").value;

    db.collection("Comentarios").add({
        email: email,
        name: name,
        comment: comment
    })
        .then(function (docRef) {
            console.log("Comentario registrado con ID: ", docRef.id);
            alert("Comentario registrado con éxito.");
            location.reload();
        })
        .catch(function (error) {
            console.error("Error al registrar el comentario: ", error);
            alert("Error al registrar el comentario. Por favor, inténtalo de nuevo.");
        });
}

//Funcion para mostrar comentarios
var tabla = document.getElementById('tabla');
db.collection("Comentarios").get().then((querySnapshot) => {
    tabla.innerHTML= '';
    querySnapshot.forEach((doc) => {
        console.log(`${doc.id} => ${doc.data()}`);
        tabla.innerHTML += `
        <tr>
            <th scope="row">${doc.id}</th>
            <td>${doc.data().name}</td>
            <td>${doc.data().email}</td>
            <td>${doc.data().comment}</td>
        </tr>
        `
    });
});

