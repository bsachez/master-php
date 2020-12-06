<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario en PHP</title>
</head>
<body>
	<h1>Formulario en PHP</h1>
	<hr>

	<!-- <form action="recivir.php" method="GET"> -->
	<form action="recivir.php" method="POST">
		<p>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre">
		</p>

		<p>
			<label for="apellidos">Apellidos</label>
			<input type="text" name="apellidos">
		</p>

		<input type="submit" value="Enviar Datos">
	</form>
</body>
</html>