<?php

// CONECTAR A LA BASE DE DATOS
$conexion = mysqli_connect('localhost', 'root', '', 'phpmysql');

// COMPROBAR SI LA CONEXION ES CORRECTA
if (mysqli_connect_errno()) {
    echo 'La conexion a la base de datos MySQL ha fallado'.mysqli_connect_error();
} else {
    echo 'Conexion realizada correctamente';
}

// CONSULTA PARA CONFIGURAR LA CODIFICACION DE CARACTERES
mysqli_query($conexion, "SET NAMES 'utf8'");

// CONSULTA SELECT DESDE PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");

// $notas = mysqli_fetch_assoc($query);

while ($nota = mysqli_fetch_assoc($query)) {
    // var_dump($nota);

    echo '<h2>'.$nota['titulo'].'</h2>';
    echo '<p>'.$nota['descripcion'].'</p>';
}

// INSERTAR EN LA BASE DE DATOS DESDE PHP
$sql = "INSERT INTO notas VALUES (null, 'Nota desde PHP', 'Esto es una nota que ha sido ingresada desde PHP', 'green')";

$insert = mysqli_query($conexion, $sql);

if ($insert) {
    echo "Datos insertados correctamente";
} else {
    echo "ERROR: ".mysqli_error($conexion);
}