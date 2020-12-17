<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejerciio 1</title>
</head>
<body>
    <h1>EJERCICIO 1</h1>
    <p>Crear una sesion que aumente su valor en 1 o disminuya en 1 en funcion de si el paramentro get counter esta a uno o a cero</p>

    <?php

    session_start();

    if (!isset($_SESSION["numero"])) {
        $_SESSION['numero'] = 0;
    }

    if (isset($_GET['counter']) && $_GET['counter'] == 1) {
        $_SESSION['numero']++;
    }

    if (isset($_GET['counter']) && $_GET['counter'] == 0) {
        $_SESSION['numero']--;
    }

    ?>

    <h1>El valor la sesion numero es: <?= $_SESSION['numero'] ?></h1>

    <a href="ejercicio1.php?counter=1">Aumantar el valor</a>
    <a href="ejercicio1.php?counter=0">Disminuir el valor</a>

</body>
</html>