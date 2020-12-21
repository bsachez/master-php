<?php

// ESTABLECER LA CONEXION
$db = mysqli_connect('localhost', 'root', '', 'blog');

mysqli_query($db, "SET NAMES 'utf8'");

// INICIOAMOS SESION
if (!isset($_SESSION)) {
    session_start();
}