<?php

if (isset($_POST)) {

    // CONEXION A LA BASE DE DATOS
    require_once "includes/conexion.php";

    // INICIAR SESSION
    if (!isset($_SESSION)) {
        session_start();
    }

    // RECOJER LOS VALORES DEL FORMULARIO DE REGISTRO
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $pass = isset($_POST['pass']) ? mysqli_real_escape_string($db, $_POST['pass']) : false;

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

    // VALIDAR PASSWORD
    if (!empty($pass)) {
        $pass_validado = true;
    } else {
        $pass_validado = false;
        $errores['pass'] = "La contraseña no es valida";
    }

    $guardar_usuario = false;

    if (count($errores) == 0) {

        $guardar_usuario = true;

        // CIFRAR LA CONTRASEÑA
        $pass_segura = password_hash($pass, PASSWORD_BCRYPT, ['cost'=>4]);

        // INSERTAMOS EL USUARIO A LA BASE DE DATOS
        $sql = "INSERT INTO usuarios VALUES (null, '$nombre', '$apellidos', '$email', '$pass_segura', CURDATE())";
        $guardar = mysqli_query($db, $sql);

        if ($guardar) {
            $_SESSION['completado'] = 'El registro se ha completado con exito';
        } else {
            $_SESSION['errores']['general'] = 'Fallo al guardar el usuario';
        }

    } else {
        $_SESSION['errores'] = $errores;
    }

}

header("Location: index.php");