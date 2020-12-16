<?php

// SESIONES
// Almacenar datos y persistir datos del usuario mientras que navega en el sitio web hasta que cierre sesion o cierre el navegador

// INICIAR SESIONES
session_start();

// VARIABLE LOCAL
$variable_normal = "Soy una cadena de texto";

// VARIABLE DE SESION
$_SESSION['variable_persistente'] = "Hola soy una variable activa";

echo $variable_normal.'<br>';
echo$_SESSION['variable_persistente'];