<header>
    <?php
    include '../includes/header.php';
    ?>
</header>

<div class="row">
    <!-- Columna del formulario -->
    <div class="col-md-6">
        <h2>Deja un comentario</h2>
        <form onsubmit="registrarComentario(event)" id="comentarioForm">
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
            <button type="submit" class="btn btn-primary">Enviar comentario</button>
        </form>
    </div>
    <!-- Columna de los comentarios -->
    <div class="col-md-6">
        <h2>Comentarios</h2>
        <div id="comentarios-container"></div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Comentario</th>
                </tr>
            </thead>
            <tbody id="tabla">
            </tbody>
        </table>
    </div>
</div>

<footer>
    <?php
    include '../includes/footer.php';
    ?>
</footer>


<link rel="Icon" type="png" href='/RF-PHP/public/assets/img/icono.jpg'>
<script src="https://www.gstatic.com/firebasejs/8.9.0/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-firestore.js"></script>
<script src="../../controllers/comentarios.js"></script>

