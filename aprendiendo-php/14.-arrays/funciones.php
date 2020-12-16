<?php

$cantantes = ['Michael Jackson', 'BB King', 'Alex Lora'];
$numeros = [1,5,4,9,8,7,6];

// PARA ORDENAR ALFAVETICAMENTE NOMBRES Y PONER EN ORDEN NUMEROS
// sort($cantantes);
sort($numeros);

// PARA ORDENARLO EN INVERSO
// arsort($cantantes);

// AÑADIR ELEMENTOS A UN ARRAY
// $cantantes[] = "Diana Alvarez";
// array_push($cantantes, "Brayan Sànchez");

// ELIMINAR EL ULTIMO ELEMENTO DE UN ARRAY
// array_pop($cantantes);

// PARA ELIMINAR UN INDICE EN ESPECIFICO
// unset($cantantes[2]);

// PARA SACER UN ELEMENTO ALEATORIO
// $indice = array_rand($cantantes);
// echo $cantantes[$indice];

// CONTAR NUMERO DE ELEMENTOS DE UN ARRAY
echo count($cantantes).'<br>';

// OTRA MANERA DE CONTAR ELEMENTOS ES TAMBIEN DE ESTA MANERA
echo sizeof($cantantes);

// BUSCAR INDICE DENTRO DE UN ARRAY
$resultado = array_search('Alex Lora', $cantantes);
var_dump($resultado);

var_dump($numeros);

var_dump(array_reverse($numeros));

var_dump($cantantes);