<?php

// HACER UN PRQUEÑO PROGRAMA QUE SUME TODOS LOS NUMERO QUR HAY DEL 1 AL 100

$resultado = 0;

for ($i=0; $i <= 100; $i++) {
	$resultado += $i;
}

echo "<h1>El resultado es $resultado</h1>";

echo "<hr>";

// TABLA DE MULTIPLICAR CON FOR

if (isset($_GET["numero"])) {

	$numero = $_GET["numero"];

	echo "<p>Tabla de multiplicar del numero $numero</p>";

	for ($i=0; $i <= 10; $i++) {

		if ($numero == 45) {
			echo "<h1>NO SE PUEDEN MOSTRAR ESTAS OPERACIONES PROHIBIDAS, POR FAVOR INTRODUSCA UN NUMERO MENOR AL 45</h1>";

			break;
		}

		echo "$numero x $i = ".($numero * $i)."<br>";
	}

} else {
	echo "<h1>POR FAVOR INTRUSCA EL PARAMETRO NUMERO POR LA URL</h1>";
}