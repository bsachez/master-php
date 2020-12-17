<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>EJERCICIO 2</h1>
    <ul>
        <li>Una funcion</li>
        <li>Validar un email con filter_var</li>
        <li>Recoger Variable con GET y validarla</li>
        <li>Mostrar el resultado</li>
    </ul>

    <hr>

    <?php

    function validarEmail($email) {
        $status = "No valido";

        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $status = "valido";
        }

        return $status;
    }

    if (isset($_GET['email'])) {
        echo validarEmail($_GET['email']);
    } else {
        echo "<h1>PASA POR GET UN EMAIL</h1>";
    }

    ?>
</body>
</html>