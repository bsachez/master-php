<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 4</title>
</head>
<body>
	<h1>EJERCICIO 4</h1>
	<p>Recojer dos numeros por la url y hcer todas las operaciones basicas de una calculadora de esos dos numeros</p>

	<hr>

	<?php

	if (isset($_GET["numero1"]) && isset($_GET["numero2"])) {

		$numero1 = $_GET["numero1"];
		$numero2 = $_GET["numero2"];

		echo "$numero1 + $numero2 = ".($numero1 + $numero2)."<br>";
		echo "$numero1 - $numero2 = ".($numero1 - $numero2)."<br>";
		echo "$numero1 x $numero2 = ".($numero1 * $numero2)."<br>";
		echo "$numero1 / $numero2 = ".($numero1 / $numero2)."<br>";
	} else {
		echo "<h1>No hay parametros para las variables, por favor inttrodusca datos por la url</h1>";
	}

	?>
</body>
</html>