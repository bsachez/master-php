<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>EJERCICIO 3</h1>
    <p>Hacer una interface de usuario (formulario) con dos inputs y cuatro botones y con esos elementos hacer una calculadora</p>

    <hr>

    <h2>Calculadora en PHP</h2>

    <?php

    $resultado = false;

    if (isset($_POST['n1']) && isset($_POST['n2'])) {

        if (isset($_POST['sumar'])) {
            $resultado = $_POST['n1'].'+'.$_POST['n2'].'='.($_POST['n1'] + $_POST['n2']);
        }

        if (isset($_POST['restar'])) {
            $resultado = $_POST['n1'].'-'.$_POST['n2'].'='.($_POST['n1'] - $_POST['n2']);
        }

        if (isset($_POST['multiplicar'])) {
            $resultado = $_POST['n1'].'x'.$_POST['n2'].'='.($_POST['n1'] * $_POST['n2']);
        }

        if (isset($_POST['dividir'])) {
            $resultado = $_POST['n1'].'/'.$_POST['n2'].'='.($_POST['n1'] / $_POST['n2']);
        }
    }

    ?>

    <form action="" method="post">
        <label for="n1">Numero 1</label>
        <input type="number" name="n1" id="n1">
        <br>

        <label for="n2">Numero 2</label>
        <input type="number" name="n2" id="n2">
        <br>

        <input type="submit" value="sumar" name="sumar">
        <br>
        <input type="submit" value="restar" name="restar">
        <br>
        <input type="submit" value="multiplicar" name="multiplicar">
        <br>
        <input type="submit" value="dividir" name="dividir">
    </form>

    <?php

    if ($resultado != false) {
        echo "<h2>$resultado</h2>";
    }

    ?>
</body>
</html>