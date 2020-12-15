<?php 

// DEBUGEAR

$nombre = "Brayan Sànchez";

var_dump($nombre);

// FECHAS

echo date('d-m-y');
echo "<br>";
echo time();

// MATEMATICAS

echo "<br>";

echo "La raiz cuadrada de 10 es: ".sqrt(10);

echo "<br>";

echo "Numero aleatorio entre 10 y 40 = ".rand(10, 40);

echo "<br>";

echo "PI es = ".pi();

echo "<br>";

echo "Redondear a numero entero = ".round(7.45687546);

echo "<br>";

echo "Redondear con decimales = ".round(7.45687546, 2);

echo "<hr>";

// TYPPE

echo gettype($nombre);

echo "<br>";

if (is_string($nombre)) {
	echo "Esto es una cadena de texto";
}

echo "<br>";

if (!is_float($nombre)) {
	echo "Esta variable no es un numero con decimales";
}

echo "<hr>";

// COMPROBAR SI EXISTE UNA VARIABLE

if (isset($nombre)) {
	echo "La variable existe";
} else {
	echo "La variable no existe";
}

echo "<hr>";

// LIMPIAR ESPACIOS

$contenido = "            mi contenido     ";

var_dump(trim($contenido));

// ELIMINAR VARIABLES O INDICES DE ARRAYS

/*$year = 2020;

unset($year);

echo $year;*/

// COMPROBAR VARIABLES VACIAS

echo "<hr>";

$texto3 = "";

if (empty($texto3)) {
	echo "La variable texto3 esta vacia";
} else {
	echo "La variable texto3 tiene este contenido<br><u>$texto3</u>";
}

echo "<hr>";

// CONTAR CARACTERES DE UN STRING

$cadena = "12345";

echo strlen($cadena);

echo "<br>";

// ENCONTRAR CARACTER

$frase = "La vida es una puta mierda";

echo strpos($frase, "es");

echo "<hr>";

// REEMPLAZAR FRASE EN UN STRING

$frase = str_replace("vida", "moto", $frase);

echo $frase;

echo "<hr>";

// MAYUSCULAS Y MINUSCULAS

echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);