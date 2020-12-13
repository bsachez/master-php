<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 7</title>
</head>
<body>
	<h1>EJERCICIO 7</h1>
	<p>Hacer un programa que muestre todos los numero impares entre dos numeros que lleguen por la url</p>

	<hr>

	<?php 

	if (isset($_GET["numero1"]) && isset($_GET["numero2"])) {

		$numero1 = $_GET["numero1"];
		$numero2 = $_GET["numero2"];

		if ($numero1 > $numero2) {
			echo "<h1>El numero 1 debe ser menor a numero 2</h1>";
		} else {

			echo "Estos son los numeros impares que hay entre $numero1 y $numero2<br>";
		
			for ($i=$numero1; $i <= $numero2; $i++) { 
				
				if ($i%2 != 0) {
					echo "$i<br>";
				}

			}

		}

	} else {
		echo "<h1>No hay parametros para las variables, por favor inttrodusca datos por la url</h1>";
	}

	?>
</body>
</html>