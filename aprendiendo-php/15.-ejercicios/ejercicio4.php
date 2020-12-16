<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>EJERCICIO 4</h1>
    <p>Crear un script en PHP que tenga 4 variables:</p>

    <ul>
        <li>Uno de tipo array</li>
        <li>Uno de tipo string</li>
        <li>Uno de tipo entero</li>
        <li>Uno de tipo boolenano</li>
    </ul>

    <p>Y que imprima un mensaje segun el tipo de vatiable que sea</p>

    <hr>

    <?php

    $array = array("texto dentro de un array", 34);
    $cadena = "Hola mundo, soy una cadena de texto";
    $entero = 18;
    $booleano = false;

    if (is_array($array)) {
        echo 'Esta variable es un array';
    } else {
        echo 'Esta variable no es un array';
    }

    echo '<hr>';

    if (is_string($cadena)) {
        echo 'Esta variable es una cadena';
    } else {
        echo 'Esta variable no es una cadena';
    }

    echo '<hr>';

    if (is_integer($entero)) {
        echo "Esta variable es un numero entero y su valor es de $entero";
    } else {
        echo 'Esta variable no es un numero entero';
    }

    echo '<hr>';

    if (is_bool($booleano)) {

        if ($booleano) {
            echo 'Esta variable es un booleano y es verdadero';
        } else {
            echo 'Esta variable es un booleano y es falso';
        }

    } else {
        echo 'Esta variable no es un booleano';
    }

    ?>
</body>
</html>