<?php 

require_once 'coche.php';

$coche1 = new Coche('verde', 'tesla', 'tesla modelo 13', 150, 200, 3);
$coche2 = new Coche('amarillo', 'mercedes', 'mercedes modelo 3', 150, 200, 3);
$coche3 = new Coche('rojo', 'ferrari', 'ferrari modelo 2', 150, 200, 3);
$coche4 = new Coche('azul', 'vmw', 'vmw modelo 30', 150, 200, 3);

var_dump($coche1);
echo '<br>';
var_dump($coche2);
echo '<br>';
var_dump($coche3);
echo '<br>';
var_dump($coche4);