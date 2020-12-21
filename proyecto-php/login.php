<?php

// INICIAR LA SECION Y LA CONEXION A LA BASE DE DATOS
require_once "includes/conexion.php";

// RECOGER DATOS DEL FORMULARIO
if (isset($_POST)) {

    // BORRAR ERROR ANTIGUO
    if (isset($_SESSION['error_login'])) {
        unset($_SESSION['error_login']);
    }

    // RECOJO DATOS DEL FORMULARIO
    $email = trim($_POST['email']);
    $pass = $_POST['pass'];

    // CONSULTA PARA COMPROBAR LA CREDENCIAL DEL UAURIO
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {

        $usuario = mysqli_fetch_assoc($login);

        // COMPROBAR LA CONTRASEÑA
        $verify = password_verify($pass, $usuario['password']);

        if ($verify) {

            // UTILIZAR UNA SESION PARA GUARDAR LOS DATOS DEL USUARIO LOGEADO
            $_SESSION['usuario'] = $usuario;

        } else {

            // SI ALGO FALLA ENVIAR UNA SESION CON EL FALLO
            $_SESSION['error_login'] = "Login incorrecto";

        }

    } else {

        // MENSAJE DE ERROR
        $_SESSION['error_login'] = "Login incorrecto";

    }

}

// REDIRIGIR AL INDEX.PHP
header('location: index.php');