<?php 

/*ARRAYS 
Un array es una coleccion o un concunto de datos/valores, bajo un unico nombre.
Para acceder a esos valores podemos usar un undice numerico o alfanumerico*/

$peliculas = array("Batman", "spider man", "el señor de los anillos");

// var_dump($peliculas);

echo $peliculas["0"];

echo "<hr>";

// RECORRER UN ARRAY CON UN FOR

echo "<h1>Listado de peliculas con for</h1>";

echo "<ul>";

for ($i=0; $i < count($peliculas); $i++) { 
	echo "<li>$peliculas[$i]</li>";
}

echo "</ul>";

// RECORRER UN ARRAY CON UN FOREACH

echo "<hr>";

echo "<h1>Listado de peliculas con foreach</h1>";

echo "<ul>";

foreach ($peliculas as $key => $value) {
	echo "<li>$value</li>";
}

echo "</ul>";

// ARRYS ASOCIATIVOS

$personas = array(

	'nombre' => 'Brayan',
	'apellidos' => 'Sànchez',
	'web' => 'bsweb.com'

);

var_dump($personas);

var_dump($personas["web"]);

// ARRAYS MULTIDIMENCIONALES

$contactos = array(

	array(

		'nombre' => 'Diana',
		'email' => 'diana@diana.com'

	),

	array(

		'nombre' => 'Jess',
		'email' => 'jess@jess.com'

	),

	array(

		'nombre' => 'Pamela',
		'email' => 'pamela@pamela.com'

	)

);

var_dump($contactos);

// para entrar a un indice en especifico

echo "<br>";

echo $contactos[2]['email'];

echo "<hr>";

// RECORRER UN ARRAY ASOCIATIVO CON UN FOREACH

foreach ($contactos as $key => $value) {
	echo $value['nombre'].'<br>';
}