<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inlcudes en PHP</title>
</head>
<body>
	
	<!--============================
	=            HEADER            =
	=============================-->
	 
	 <?php include "includes/header.php"; ?>
	 
	<!--====  End of HEADER  ====-->

	<!--==========================
	=            MAIN            =
	===========================-->
	 
	 <div>
	 	<h2>Esta es la pagina de inicio</h2>
	 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis sit ducimus maxime nemo, reiciendis rerum doloremque, eos delectus maiores modi accusantium aliquam quod, incidunt nesciunt id quia aperiam dolor aspernatur.</p>
	 </div>
	 
	<!--====  End of MAIN  ====-->

	<!--============================
	=            FOOTER            =
	=============================-->
	 
	 <?php include "includes/footer.php"; ?>
	 
	<!--====  End of FOOTER  ====-->


	<!-- PARECIDO AL INCLUDE TAMBIEN TENEMOS EL REQUIRE QUE LA DIFERENCIA ES QUE SI EL FICHERO ESTA MAL COLOCADO Y NO EXISTE SE DETIENE AUTOMATICAMENTE LA EJECUCION DE TODA LA PAGINA 

	Y EN CUALQUIERA DE LOS DOS CASOS PODEMOS HACER LO SIGUIENTE

	include_once
	require_once

	que nos permite hacer que el FICHERO que se quiere colocal solo se coloque una vez asi lo pongamos 1000 veces en el codigo este solo se mostrar una vez en el frontend -->

</body>
</html>