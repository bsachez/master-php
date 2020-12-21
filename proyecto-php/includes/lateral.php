<div id="contenedor">
<!-- SIDEBAR -->
<aside id="sidebar">

    <div id="buscador" class="bloque">
        <h3>Buscar</h3>

        <form action="buscar.php" method="post">
            <input type="text" name="busqueda" id="busqueda">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <?php if (isset($_SESSION['usuario'])): ?>
        <div class="bloque" id="usuario-logeado">
            <h3>Bienvenido <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>

            <!-- BOTONES -->
            <a href="crear-categorias.php" class="boton">Crear Categoria</a>
            <a href="crear-entrada.php" class="boton boton-verde">Crear Entrada</a>
            <a href="mis-datos.php" class="boton boton-naranja">Mis Datos</a>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar Sesion</a>
            <!-- /BOTONES -->
        </div>
    <?php endif; ?>

    <?php if (!isset($_SESSION['usuario'])): ?>
    <div id="login" class="bloque">
        <h3>Identificate</h3>

        <?php if (isset($_SESSION['error_login'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['error_login']; ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <label for="pass">Contraseña</label>
            <input type="password" name="pass" id="pass">

            <input type="submit" name="submit" value="Entrar">
        </form>
    </div>

    <div id="register" class="bloque">

        <?php if (isset($_SESSION['completado'])): ?>

        <div class="alerta alerta-exito"><?= $_SESSION['completado']; ?></div>

        <?php elseif(isset($_SESSION['error']['general'])): ?>

        <div class="alerta alerta-error"><?= $_SESSION['error']['general']; ?></div>

        <?php endif; ?>

        <h3>Registrate</h3>

        <form action="registro.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nombre') : '' ?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos">
            <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidos') : '' ?>

            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'email') : '' ?>

            <label for="pass">Contraseña</label>
            <input type="password" name="pass" id="pass">
            <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'pass') : '' ?>

            <input type="submit" value="Registrar">
        </form>

        <?php borrarErrores(); ?>
    </div>
    <?php endif; ?>
</aside>
<!-- /SIDEBAR -->