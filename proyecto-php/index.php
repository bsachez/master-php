
    <!-- CABEZERA -->
    <?php require_once "includes/cabecera.php"; ?>
    <!-- /CEBEZERA -->

        <!-- SIDEBAR -->
        <?php require_once "includes/lateral.php"; ?>
        <!-- /SIDEBAR -->

        <!-- CONTENIDO PRINCIPAL -->
        <div id="principal">
            <h1>Ultimas Entradas</h1>

            <?php $entradas = conseguirEntradas($db, true);
            if (!empty($entradas)):
                while ($entrada = mysqli_fetch_assoc($entradas)):?>

                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?= $entrada['titulo']; ?></h2>
                        <span class="fecha"><?= $entrada['categoria'].' | '.$entrada['fecha']; ?></span>
                        <p><?= substr($entrada['descripcion'], 0-300).'...'; ?></p>
                    </a>
                </article>

                <?php endwhile; ?>
            <?php endif; ?>

            <div id="ver-todas">
                <a href="entradas.php">Ver Todas Las Entradas</a>
            </div>

        </div>
        <!-- /CONTENIDO PRINCIPAL -->

    <!-- FOOTER -->
    <?php require_once "includes/footer.php"; ?>
    <!-- /FOOTER -->
</body>
</html>