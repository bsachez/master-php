<?php

// PARA MOSTRAR EL VALOR DE LAS COOKIES SE TIENE QUE USAR $_COOKIE QUE ES UNA VARIABLE SUPERGLOBAL Y ADEMAS ES UN ARRAY ASOCIATIVO

if (isset($_COOKIE['micookie'])) {
    echo '<h1>'.$_COOKIE['micookie'].'</h1>';
} else {
    echo "No existe la cookie";
}

?>

<a href="borrar_cookie.php">Borrar cookies</a>