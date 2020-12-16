<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 2</title>
</head>
<body>
	<h1>EJERCICIO 2</h1>
	<p>Escribir un programa en PHP que añada valores a un array mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla</p>

	<?php

	$contenido = array();

	for ($i=1; $i <= 120; $i++) {
		$contenido[] = $i;
	}

	// for ($i=1; $i <= 120 ; $i++) {
	// 	array_push($contenido, "elemento".$i);
	// }

	foreach ($contenido as $key => $value) {
		echo $value.'<br>';
	}

	// var_dump($contenido);

	?>
</body>
</html>