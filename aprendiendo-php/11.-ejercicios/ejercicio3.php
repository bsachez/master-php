<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 3</title>
</head>
<body>
	<h1>EJERCICIO 3</h1>
	<p>Escribir un programa que imprima por pantalla los cuadrados de los primeros 40 numero naturales, utilizando el bucle WHILE</p>

	<hr>

	<?php 

	$contador = 0;

	while ($contador <= 40) {
		$cuadrado = $contador * $contador;
		echo "<h3>$cuadrado</h3>";
	}

	?>
</body>
</html>