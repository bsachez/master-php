<?php 

/*VARIABLES LOCALES:
Son las que se definen dentro de una funcion y no pueden ser usadas fuera de la funcion, solo estan disponibles dentro de la funcion a no ser que hagamos un return

VARIABLES GLOBALES:
Son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de la funcion*/

$frase = "Ni los genios son tan genios, no los mediocres tan mediocres";

echo $frase;

function holaMundo() {
	global $frase; // sin la palabra antesesora global la variable $frase no funcionaria

	echo "<h1>$frase</h1>";

	$year = 2020; // pero si yo declaro una varible dentro de una funcion esta no va a funcionar fuera de la funcion y para poder imprimirla tengo que hacer un return

	return $year;
}

echo holaMundo();

// echo $year;

// FUNCIONES VARIABLES

function buenasdias() {
	return "<h1>Hola buenos dias</h1>";
}

function buenastardes() {
	return "<h1>Hola buenas tardes</h1>";
}

function buenasnoches() {
	return "<h1>Hola buenas noches</h1>";
}

if (isset($_GET["horario"])) {
	
	$horario = $_GET["horario"];

	$miFuncion = "buenas".$horario;

	echo $miFuncion();

} else {
	echo "<h1>No hay parametros para las variables, por favor inttrodusca datos por la url</h1>";
}

