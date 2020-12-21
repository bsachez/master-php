<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- CONTENIDP PRINCIPAL -->
<div id="principal">

    <?php if (isset($_SESSION['completado'])): ?>

    <div class="alerta alerta-exito"><?= $_SESSION['completado']; ?></div>

    <?php elseif(isset($_SESSION['errores']['general'])): ?>

    <div class="alerta alerta-error"><?= $_SESSION['errores']['general']; ?></div>

    <?php endif; ?>

    <h3>Mis datos</h3>

    <br>

    <form action="actualizar-usuario.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?= $_SESSION['usuario']['nombre'] ?>">
        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nombre') : '' ?>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" value="<?= $_SESSION['usuario']['apellidos'] ?>">
        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidos') : '' ?>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $_SESSION['usuario']['email'] ?>">
        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'email') : '' ?>

        <input type="submit" value="Guardar Cambios">
    </form>

    <?php borrarErrores(); ?>

</div>
<!-- /CONTENIDP PRINCIPAL -->

<?php require_once 'includes/footer.php'; ?>