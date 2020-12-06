<?php 

/*

TIPOS DE DATOS PARA LAS VARIABLES

 - ENTEROS (int / integer) = 458
 - COMA FLOTANTE O DECIMAL (doble / float) = 85.45
 - CADENA (string) = "HOLA YO SOY UNA CADENA DE TEXTO"
 - BOOLEANO (BOOL) = true / false
 - null
 -ARRAY (COLECCION DE DATOS)
 - OBJETOS

*/

 $numero = 100;
 $decimal = 12.5;
 $texto = "SOY UNA CADENA DE TEXTO";
 $verdadero = true;
 $nula = null;

 echo '<h1>'.gettype($numero).'</h1>';
 echo '<h1>'.gettype($decimal).'</h1>';
 echo '<h1>'.gettype($texto).'</h1>';
 echo '<h1>'.gettype($verdadero).'</h1>';
 echo '<h1>'.gettype($nula).'</h1>';

 echo "<hr>";

 // COMO DEBUGEAR DATOS

 $mi_nombre = "Brayan Emanuel";

 var_dump($mi_nombre);