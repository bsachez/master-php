<?php

 // BULE WHILE

 // ESTRUCTURA DE CONTROL QUE ITERA O REPITE LA EJECUCION DE UNA SERIE DE INSTRUCCIONES TANTAS VECES COMO SEA NECESARIO, EN BASE A UNA  CONDICION

// while(condicion) {
// 	bloque de instrucciones

// 	puede aver mas instrucciones y estas se ejecutaran hasta que la condicion deje de complirse
// }

 // CON EL CICLO WHILE HACER QUE UN VARIABLE LLAMADA NUMERO CON UN VALOR DE 0 SE INCREMENTE HASTA 100 DE UNO EN UNO

// $numero = 0;

//  while($numero <= 100) {
//  	echo "<p>$numero</p>";
//  	$numero++;  // PARA QUE EL CICLO NO SE EJECUTE INFINIRAMENTE INCREMENTAMOS EL NUMERO DE LA VARIABLE CON EL OPERADOR DE INCREMENTEO
//  }


 // DEL EJERCICIO ANTERIOR SEPARAMOS LOS NUMEROS CON COMAS

	$numero = 0;

	while($numero <= 100) {
		echo $numero;

		if($numero != 100) {
			echo ",";
		}

		$numero++;
	}

	echo "<hr>";

  // EJEMPLO

if(isset($_GET['numero'])) {
	// CAMBIAMOS EL TIPO DE DATO A ENTERO
	$numero = (int)$_GET['numero'];
} else {
	$numero = 1;
}

$contador = 0;

// var_dump($numero);

echo "<h1>TABLA DE MULTIPLICAR DEL NUMERO $numero</h1>";

while ($contador <= 10) {
	echo "$numero x $contador = ".($numero * $contador)."<br>";
	$contador++;
}

/*

do {
	BLOQUE DE INSTRUCCIONES
}while(CONDICION);

*/

// EJEMPLO

$edad = 17;
$contador = 1;

do {
	echo "TIENES ACCESO AL LOCAL PRIVADO $contador";
	$contador++;
} while($edad >= 18 && $contador <=10);