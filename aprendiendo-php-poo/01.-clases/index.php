<?php 

// PROGRAMACIN ORIENTADA A OBJETOS (POO)

// DEFINIR UNA CLASE
// (MODELO PARA CREAR MAS OBJETOS DE TIPO COCHE CON CARACTERISTICAS PARECIDAS)

class Coche {

	// ATRIBUTOS O PROPIEDADES (variables)
	public $color = 'Rojo';
	public $marca = 'Tesla';
	public $modelo = 'Tesla model 3';
	public $velocidad = 300;
	public $caballaje = 500;
	public $plaza = 2;

	// METODOS SON ACCIONES QUE HACE EL OBJETO (antes funciones)
	public function getColor() {
		// BUSCAR EN ESTA CLASE LA PROPIEDAD "X"
		return $this->color;
	}

	public function setColor($color) {
		$this->color = $color;
	}

	public function acelerar() {
		$this->velocidad++;
	}

	public function frenar() {
		$this->velocidad--;
	}

	public function getVelocidad() {
		return $this->velocidad;
	}

}

// CREAR UN OBJETO / INSTANCIAR LA CLASE
$coche = new Coche();

// USAR LOS METODOS
echo $coche -> getVelocidad();

$coche -> setColor('Amarillo');

echo "<br>";

echo "El color del coche es: ".$coche -> getColor();

echo "<br>";