<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 6</title>
</head>
<body>
	<h1>EJERCICIO 6</h1>
	<p>Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10</p>

	<hr>

	<table border="1">
		<tr>
			<?php

			for ($cabezera = 1; $cabezera <=10; $cabezera++) {
				echo "<td>Tabla del numero $cabezera</td>";
			}

			?>
		</tr>

		<tr>
			<?php

			for ($i=0; $i <= 10; $i++) {
				echo "<td>";

				for ($x=1; $x <= 10; $x++) {
					echo "$i x $x = ".($i * $x)."<br>";
				}

				echo "</td>";
			}

			?>
		</tr>
	</table>
</body>
</html>