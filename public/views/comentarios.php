<header>
    <?php
    include '../includes/header.php';
    ?>
    <link rel="Icon" type="png" href='/RF-PHP/public/assets/img/icono.jpg'>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-firestore.js"></script>
    <script src="../../controllers/comentarios.js"></script>
    <<script>
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
        const db = firebase.firestore();

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
        .then(function(docRef) {
        console.log("Comentario registrado con ID: ", docRef.id);
        alert("Comentario registrado con éxito.");
        })
        .catch(function(error) {
        console.error("Error al registrar el comentario: ", error);
        alert("Error al registrar el comentario. Por favor, inténtalo de nuevo.");
        });
        }
        </script>

</header>
<!-- comment_form.php -->

<div class="m-5">
    <form onsubmit="registrarComentario(event)" class="col-md-4" id="comentarioForm">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="comment">Comentario:</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" onclick="guardar()">Enviar comentario</button>
    </form>
</div>

<footer>

    <?php
    include '../includes/footer.php';
    ?>
</footer>

<script type="module" src="../../controllers/firebaseconect.js"></script>