<?php  

// CONDICIONALES 

// IF


 // OPERADORES DE COMPARACION

 /*== IGUAL
 === IDENTICO
 != DIFERENTE
 <> DIFERENTE
 !== NO IDENTICO
 < MENOR QUE
 > MAYOR QUE
 <= MENOR O IGUAL QUE
 >= MAYOR O IGUAL QUE

 OERADIRES LOGICOS

 && AND
 || OR
 ! NO
 AND
 OR*/

$color = "verde";

if($color == "rojo") {
	echo "<h1>El color es rojo</h1>";
} else {
	echo "<h1>El color no es rojo, el color es ".$color."</h1>";
}

echo "<hr>";

$dia = 6;

if($dia == 1) {
	echo "<p>Hoy es Lunes</p>";
} else if($dia == 2) {
	echo "<p>Hoy es Martes</p>";
} else if($dia == 3) {
	echo "<p>Hoy es Miercoles</p>";
} else if($dia == 4) {
	echo "<p>Hoy es Jueves</p>";
} else if($dia == 5) {
	echo "<p>Hoy es Viernes</p>";
} else if($dia == 6) {
	echo "<p>Hoy es Fin de semana</p>";
}

echo "<hr>";

$dia2 = 6;

switch($dia2) {
	case 1:
		echo "Lunes";
		break;

	case 2:
		echo "Martes";
		break;

	case 3:
		echo "Miercoles";
		break;

	case 4:
		echo "Jueves";
		break;

	case 5:
		echo "Viernes";
		break;

	default:
		echo "Es Fin de semana";
		break;
}

echo "<hr>";

// EJEMPLO DEL GOTO

GOTO vamos;

echo "<h3>INTRUCCION 1</h3>";
echo "<h3>INTRUCCION 2</h3>";
echo "<h3>INTRUCCION 3</h3>";
echo "<h3>INTRUCCION 4</h3>";

vamos: 
echo "<h1>ME HE SALTADO 4 ECHO'S</h1>";