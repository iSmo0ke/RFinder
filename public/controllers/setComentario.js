const commentForm = document.getElementById("commentForm");
const commentTextarea = document.getElementById("comment");

commentTextarea.addEventListener("keypress", function(event) {
    
    if (event.key === "Enter") {
        event.preventDefault();
        
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const comentario = commentTextarea.value;
        
        guardarComentario(name, email, comentario);
        
        commentTextarea.value = "";
    }
});
