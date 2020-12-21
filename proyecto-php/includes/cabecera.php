<?php require_once 'conexion.php'; ?>
<?php require_once "includes/helpers.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de videojuegos</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!-- CABEZERA -->
<header id="cabecera">
    <div id="logo">
        <a href="index.php">Blog de Videojuegos</a>
    </div>

    <!-- MENU -->
    <nav id="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>

            <?php $categorias = conseguirCategorias($db); ?>

            <?php if (!empty($categorias)): ?>

                <?php while ($categoria = mysqli_fetch_assoc($categorias)): ?>
                <li><a href="categoria.php?id=<?= $categoria['id']; ?>"><?= $categoria['nombre']; ?></a></li>
                <?php endwhile; ?>

            <?php endif; ?>

            <li><a href="">Sobre mi</a></li>
            <li><a href="">Contacto</a></li>
        </ul>
    </nav>
    <!-- /MENU -->
</header>
<!-- /CEBEZERA -->