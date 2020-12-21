<?php

if (isset($_POST)) {

    // CONEXION A LA BASE DE DATOS
    require_once "includes/conexion.php";

    // RECOJER LOS VALORES DEL FORMULARIO DE ACTUALIZACION
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

    // ARRAY DE ERRORES
    $errores = array();

    // VALIDAR LOS DATOS ANTES DE GUARDARLOS EN LA BASE DE DATOS

    // VALIDAR NOMBRE
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    // VALIDAR APELLIDO
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellido_validado = true;
    } else {
        $apellido_validado = false;
        $errores['apellidos'] = "El apellido no es valido";
    }

    // VALIDAR EMAIL
    if (!empty($email) && FILTER_VALIDATE_EMAIL) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }

    $guardar_usuario = false;

    if (count($errores) == 0) {

        $usuario = $_SESSION['usuario'];
        $guardar_usuario = true;

        // COMPROBAR SI EL EMAIL YA EXISTE EN LA BASE DE DATOS
        $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);

        // var_dump($errores);
        // die();

        if ($isset_user['id'] == $usuario['id'] || empty($isset_user)) {

            // ACTUALIZAR EL USUARIO A LA BASE DE DATOS
            $sql = "UPDATE usuarios SET nombre = '$nombre', apellidos = '$apellidos', email = '$email' WHERE id =".$usuario['id'];
            $guardar = mysqli_query($db, $sql);

            if ($guardar) {
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;

                $_SESSION['completado'] = 'Tus datos se han actualizado con exito';
            } else {
                $_SESSION['errores']['general'] = 'Fallo al actualizar los datos del usuario';
            }
        } else {
            $_SESSION['errores']['general'] = 'El correo ya existe en la base de datos';
        }

    } else {
        $_SESSION['errores'] = $errores;
    }

}

header("Location: mis-datos.php");