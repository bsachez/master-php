<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- CONTENIDO PRINCIPAL -->
<div id="principal">
    <h1>Crear Entradas</h1>
    <p>Añade nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar del contenido</p>
    <br>

    <form action="guardar-entradas.php" method="post">
        <label for="titulo">Titulo de la entrada:</label>
        <input type="text" name="titulo" id="titulo">
        <?php echo isset($_SESSION['errores_entradas']) ? mostrarErrores($_SESSION['errores_entradas'], 'titulo') : '' ?>

        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion" cols="100" rows="10"></textarea>
        <?php echo isset($_SESSION['errores_entradas']) ? mostrarErrores($_SESSION['errores_entradas'], 'descripcion') : '' ?>

        <label for="categorias">Categorias:</label>
        <select name="categorias" id="categorias">
        <?php $categorias = conseguirCategorias($db);
        if (!empty($categorias)):
            while ($categoria = mysqli_fetch_assoc($categorias)): ?>
            <option value="<?= $categoria['id'] ?>"><?= $categoria['nombre']; ?></option>
        <?php endwhile;
        endif; ?>
        </select>
        <?php echo isset($_SESSION['errores_entradas']) ? mostrarErrores($_SESSION['errores_entradas'], 'categorias') : '' ?>

        <input type="submit" value="Guardar">
    </form>
    <?php borrarErrores(); ?>
</div>
<!-- /CONTENIDO PRINCIPAL -->

<!-- FOOTER -->
<?php require_once "includes/footer.php"; ?>
<!-- /FOOTER -->