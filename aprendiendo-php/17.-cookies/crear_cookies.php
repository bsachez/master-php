<?php

// COOKIE
// Es un fichero que se guerada en el ordenador del usuario que visita la web con el fin de recordar datos o rastrear el comportamiento del mismo en la web

// CODIGO PARA CREAR UNA COOKIE

// setcookie("nombre", "valor que solo puede ser texto", caducidad, rutam dominio);

// COOKIE BASICA
setcookie("micookie", "valor de mi galleta");

// COOKIE CON EXPIRACION
setcookie("unyear", "valor de mi galleta de 365 dias", time() + (60*60*24*365));

?>

<a href="ver_cookies.php">Ver la galleta</a>