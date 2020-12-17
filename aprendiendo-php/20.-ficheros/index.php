<?php

// ABRIR ARCHIVO DE TEXTO
// $archivo = fopen("texto.txt", "r");

// LEER CONTENIDO
// $contenido = fgets($archivo);
// echo "<strong>$contenido</strong>";

// LEER UN ARCHIVO DE TEXTO CON VARIAS LINEAS
// while (!feof($archivo)) {
//     $contenido = fgets($archivo);
//     echo "<p>$contenido</p>";
// }

// CERRA ARCHIVO DE TEXTO
// fclose($archivo);

// HACER UNA COPIA DEL ARCHIVO
// copy('texto.txt', 'copia_fichero.txt') or die("Error al copiar el archivo");

// RENOMBRAR UN FICHERO
// rename('copia_fichero.txt', 'nombre_cambiado.txt');

// ELIMINAR FICHERO
// unlink('nombre_cambiado.txt') or die('Error al eliminar el fichero');

if (file_exists("texto.txt")) {
    echo "<strong>El archivo existe</strong>";
} else {
    echo "<strong>El fichero no existe</strong>";
}