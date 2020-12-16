<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>EJERCICIO 5</h1>
    <p>Crear una tabla con el siguiente contenido</p>

    <table border="1">
        <tr>
            <th>Accion</th>
            <th>Aventura</th>
            <th>Plataforma</th>
        </tr>

        <tr>
            <td>The last of us</td>
            <td>ICO</td>
            <td>Donkey Kong Country</td>
        </tr>

        <tr>
            <td>Metal gear solid</td>
            <td>Shadow of the Colosus</td>
            <td>Super Mario Bros</td>
        </tr>

        <tr>
            <td>God of War</td>
            <td>Assassin's Creed</td>
            <td>Limbo</td>
        </tr>
    </table>

    <hr>

    <?php

    $tabla = array(

        'Accion' => array('The last of us', 'Metal gear solid', 'God of War'),
        'Aventura' => array('ICO', 'Shadow of the Colosus', 'Assassin s Creed'),
        'Plataforma' => array('Donkey Kong Country', 'Super Mario Bros', 'Limbo')

    );

    $categorias = array_keys($tabla);

    ?>

    <table border="1">
        <tr>
            <?php

            foreach ($categorias as $key => $value) {
                echo "<td>$value</td>";
            }

            ?>
        </tr>

        <tr>
            <td><?= $tabla['Accion'][0] ?></td>
            <td><?= $tabla['Aventura'][0] ?></td>
            <td><?= $tabla['Plataforma'][0] ?></td>
        </tr>

        <tr>
            <td><?= $tabla['Accion'][1] ?></td>
            <td><?= $tabla['Aventura'][1] ?></td>
            <td><?= $tabla['Plataforma'][1] ?></td>
        </tr>

        <tr>
            <td><?= $tabla['Accion'][2] ?></td>
            <td><?= $tabla['Aventura'][2] ?></td>
            <td><?= $tabla['Plataforma'][2] ?></td>
        </tr>
    </table>

</body>
</html>