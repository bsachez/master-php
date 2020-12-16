<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 3</title>
</head>
<body>
	<h1>EJERCICIO 3</h1>
	<P>Hacer un programa que compruebe si una variable esta vacia y si esta vacia rellenarla con un texto en minusculas y mostrarla en mayusculas y negritas</P>

	<hr>

	<?php

	$texto = "";

	if (empty($texto)) {
		$texto = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. In cupiditate illum iste iure harum ullam nihil dolores aliquam eligendi impedit! Voluptatibus dicta impedit vitae cumque non dolores asperiores voluptatem reprehenderit.";

		$textoMayusculas = strtoupper($texto);

		echo "<strong>$textoMayusculas</strong>";
	} else  {
		echo "<h1>La variable texto ya tiene contenido y es este:</h1>";
		echo "<u><strong>$texto</strong></u>";
	}

	?>
</body>
</html>