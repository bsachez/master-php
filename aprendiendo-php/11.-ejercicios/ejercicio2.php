<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 2</title>
</head>
<body>
	<h1>EJERCICIO 2</h1>
	<p>Escribir un script en PHP que nos muestre por pantalla todos los numeros pares que hay del 1 al 100</p>

	<hr>

	<?php 

	for ($i=0; $i <= 100; $i++) { 
		if ($i % 2 == 0) {
			echo "$i<br>";
		}
	}

	?>
</body>
</html>