<?php

if (!is_dir('mi_carpeta')) {
    mkdir('mi_carpeta', 0777) or die('No se pudo crear la carpeta');
} else {
    echo "<h1>Ya existe la carpeta</h1>";
}

// PARA BORRAR LA CARPETA
// rmdir('mi_carpeta');

// VER LOS ARCHIVOS QUE HAY DENTRO DE LA CARPETA
echo "<hr>";

echo "<h1>Contenido de mi carpeta</h1>";

if ($gestor = opendir('./mi_carpeta')) {
    while (false !== ($archivo = readdir($gestor))) {
        if ($archivo != '.' && $archivo != '..') {
            echo $archivo."<br>";
        }
    }
}