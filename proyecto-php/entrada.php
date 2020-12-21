<?php

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

            <h1><?= $entrada_actual['titulo']; ?></h1>
            <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>"><h2><?= $entrada_actual['categoria']; ?></h2></a>
            <br>
            <h4><?= $entrada_actual['fecha']; ?> | Entada escrita por: <?= $entrada_actual['usuario'] ?></h4>
            <br>

            <p><?= $entrada_actual['descripcion']; ?></p>

            <br>

            <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>
                <a href="editar-entrada.php?id=<?= $entrada_actual['id']; ?>" class="boton">Editar Entrada</a>
                <a href="borrar-entrada.php?id=<?= $entrada_actual['id']; ?>" class="boton boton-rojo">Borrar Entrada</a>
            <?php endif; ?>

        </div>
        <!-- /CONTENIDO PRINCIPAL -->

    <!-- FOOTER -->
    <?php require_once "includes/footer.php"; ?>
    <!-- /FOOTER -->
</body>
</html>