<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 1</title>
</head>
<body>
	<h1>EJERCICIO 1</h1>
	<p>Hacer un programa en PHP que tenga un array con 8 numeros enteros y que haga lo siguiente:</p>
	<ul>
		<li>Recorrerlo y mostrarlo</li>
		<li>Ordenarlo y mostrarlo</li>
		<li>Mostrar su longitud</li>
		<li>Buscar algun elemento</li>
	</ul>

	<hr>

	<?php

	function mostrarArray($numeros) {

		$resultado = "";

		foreach ($numeros as $key => $value) {
			$resultado .= $value."<br>";
		}

		return $resultado;

	}

	$numeros = array(7,8,6,1,3,5,4,7);

	echo "<h1>Recorrerlo y mostrarlo</h1>";
	echo mostrarArray($numeros);

	echo "<h1>Ordenarlo y mostrarlo</h1>";
	sort($numeros);
	echo mostrarArray($numeros);

	echo "<h1>Mostrar su longitud</h1>";
	echo count($numeros);

	echo "<h1>Buscar algun elemento</h1>";

	if (isset($_GET["numero"])) {

		$numero = $_GET["numero"];

		$search = array_search($numero, $numeros);

		if (!empty($search)) {
			echo "<h4>El numero buscado existe en el array en el indice: $search</h4>";
		} else {
			echo "No existe el numero buscado";
		}

	} else {
		echo "<h1>No hay parametros para las variables, por favor inttrodusca datos por la url</h1>";
	}

	?>
</body>
</html>