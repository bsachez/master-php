<?php

if (isset($_POST)) {

    // CONEXION A LA BASE DE DATOS
    require_once "includes/conexion.php";

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

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

    if (count($errores) == 0) {
        $sql = "INSERT INTO categorias VALUES(null, '$nombre')";
        $guardar = mysqli_query($db, $sql);
    }

}

header("Location:index.php");