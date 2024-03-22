<link rel="Icon" type="png" href='/RF-PHP/public/assets/img/icono.jpg'>

<header>
    <?php
    include '../includes/header.php';
    ?>
</header>
<!-- comment_form.php -->

<div class="m-5">
    <form class="col-md-4" id="commentForm">
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

<footer>

    <?php
    include '../includes/footer.php';
    ?>
</footer>