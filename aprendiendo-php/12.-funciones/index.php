<?php

// FUNCIONES
// Una funcion es un conjunto de instrucciones agrupadas bajo un nombre en concreto y que pueden reutilizarse solamente llamando a la funcion tantas veces como queramos

// function nombreDeLaFuncion($parametros) {
// 	conjunto de instrucciones;
// }

// nombreDeLaFuncion($parametros);

// EJEMPLO 1

function muestraNombres() {
	echo "Diana Alvarez<br>";
	echo "Jess Chavez<br>";
	echo "Pamela Arismendi<br>";
	echo "Roxana Pèrez";
}

muestraNombres();

echo "<hr>";

// EJEMPLO 2

function tabla($numero) {

	echo "<h3>Tabla de multiplicar del numero $numero</h3>";

	for ($i=1; $i <= 10; $i++) {
		echo "$numero x $i = ".($numero * $i)."<br>";
	}

}

tabla(5);

echo "<hr>";

// EJEMPLO DE LA TABLA CON PARAMENTRO GET

if (isset($_GET["numero"])) {
	tabla($_GET["numero"]);
} else {
	echo "<h1>No hay parametros para las variables, por favor inttrodusca datos por la url</h1>";
}

echo "<hr>";

// TABLAS DEL 1 AL 10 CON LA FUNCION Y UN FOR

for ($i=1; $i <= 10; $i++) {
	tabla($i);
}

echo "<hr>";

// EJEMPLO CON VARIOS PARAMENTROS

/*function calculadora($numero1, $numero2) {
	$suma = $numero1 + $numero2;
	$resta = $numero1 - $numero2;
	$multiplicar = $numero1 * $numero2;
	$dividir = $numero1 / $numero2;

	echo "$numero1 + $numero2 =".$suma."<br>";
	echo "$numero1 - $numero2 =".$resta."<br>";
	echo "$numero1 * $numero2 =".$multiplicar."<br>";
	echo "$numero1 / $numero2 =".$dividir."<br>";
	echo "<hr>";
}

calculadora(12, 6);*/

// PARA TRABAJAR CON UN PARAMETRO OPCIONAL ESTE TIENE QUE SER OBLIGATORIAMENTE BOOLEANO (true/false)

// EJEMPLO

// calculadora(parametro1, parametro2, parametro3=false);

// parametro1 = obligatorio
// parametro2 = obligatorio
// parametro3 = opcional dependiendo de la funcion

// UNA BUENA PRACTICA A LA HORA DE EJECUTAR FUNCIONES ES QUE EN VEZ DE ESTAR IMPRIMIENSO ECHOS DENTRO DE LA FUNCION ESTA RETORNE EL CONETENIDO

// EJEMPLO

function calculadora($numero1, $numero2) {
	$suma = $numero1 + $numero2;
	$resta = $numero1 - $numero2;
	$multiplicar = $numero1 * $numero2;
	$dividir = $numero1 / $numero2;

	$cadenaTexto = "";

	$cadenaTexto .= "$numero1 + $numero2 =".$suma."<br>";
	$cadenaTexto .= "$numero1 - $numero2 =".$resta."<br>";
	$cadenaTexto .= "$numero1 * $numero2 =".$multiplicar."<br>";
	$cadenaTexto .= "$numero1 / $numero2 =".$dividir."<br>";
	$cadenaTexto .= "<hr>";

	return $cadenaTexto;
}

echo calculadora(12, 6);

echo "<hr>";

// EJEMPLO DE COMO EJECUTAR FUNCIONES DENTRO DE OTRAS

function getNombre($nombre) {
	$texto = "El nombre es $nombre";
	return $texto;
}

function getApellidos($apellidos) {
	$texto = "Los apellidos son $apellidos";
	return $texto;
}

function devuelveNombre($nombre, $apellidos) {
	$texto = getNombre($nombre)
						."<br>".
						getApellidos($apellidos);

	return $texto;
}

echo devuelveNombre("Brayan", "Sànchez Ramìrez");