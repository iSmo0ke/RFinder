function guardarComentario(){
    db.collection("Comentarios").add({
        nombre: document.getElementById ("name").value,
        correo: document.getElementById ("email").value,
        comentario: document.getElementById ("comment").value
    })
    .then((docRef) => {
        alert ("Comentario enviado con éxito");
    })
    .catch((error) => {
        alert ("Error al enviar comentario");
    });
}
