<?php

require_once 'includes/redireccion.php';
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';

$entrada_actual = consiguieEntrada($db, $_GET['id']);

    if (!isset($entrada_actual['id'])) {
        header("Location:index.php");
    }

?>

    <!-- CABEZERA -->
    <?php require_once "includes/cabecera.php"; ?>
    <!-- /CEBEZERA -->

        <!-- SIDEBAR -->
        <?php require_once "includes/lateral.php"; ?>
        <!-- /SIDEBAR -->

<!-- CONTENIDO PRINCIPAL -->
<div id="principal">
    <h1>Editar Entrada</h1>
    <p>Edita tu entrada <strong><u><?= $entrada_actual['titulo']; ?></u></strong></p>
    <br>

    <form action="guardar-entradas.php?editar=<?= $entrada_actual['id']; ?>" method="post">
        <label for="titulo">Titulo de la entrada:</label>
        <input type="text" name="titulo" id="titulo" value="<?= $entrada_actual['titulo']; ?>">
        <?php echo isset($_SESSION['errores_entradas']) ? mostrarErrores($_SESSION['errores_entradas'], 'titulo') : '' ?>

        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion" cols="100" rows="10"><?= $entrada_actual['descripcion']; ?></textarea>
        <?php echo isset($_SESSION['errores_entradas']) ? mostrarErrores($_SESSION['errores_entradas'], 'descripcion') : '' ?>

        <label for="categorias">Categorias:</label>
        <select name="categorias" id="categorias">
        <?php $categorias = conseguirCategorias($db);
        if (!empty($categorias)):
            while ($categoria = mysqli_fetch_assoc($categorias)): ?>
            <option value="<?= $categoria['id'] ?>" <?= ($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : '' ?>>
                <?= $categoria['nombre']; ?>
            </option>
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