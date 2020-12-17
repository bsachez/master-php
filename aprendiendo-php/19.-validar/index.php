<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios en PHP</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>

    <?php

    if (isset($_GET['error'])) {
        $error = $_GET['error'];

        if ($error == 'faltan_valores') {
            echo '<strong style="color:red;">Por favor llena todos los campos con la informacion que se te pide</strong>';
        }
    }

    ?>

    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <p><input type="text" name="nombre" id="nombre" required="required" pattern="[A-Za-z]+"></p>

        <label for="apellidos">Apellidos:</label>
        <p><input type="text" name="apellidos" id="apellidos" required="required" pattern="[A-Za-z]+"></p>

        <label for="edad">Edad:</label>
        <p><input type="number" name="edad" id="edad" required="required" pattern="[0-9]+"></p>

        <label for="email">Correo Electronico:</label>
        <p><input type="email" name="email" id="email" required="required"></p>

        <label for="pass">Contraseña:</label>
        <p><input type="password" name="pass" id="pass"></p>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>