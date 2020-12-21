<?php

class Coche {

	// ATRIBUTOS O PROPIEDADES (variables)


	/*PUBLIC = PODEMOS ACCEDER A ELLOS DESDE CUALQUIER LUGAR, DENTRO DE ESTA CLASE, DENTRO DE CLASES QUE HEREDEN ESTA CLASE O FUERA DE LA CLASE*/
	public $color;

	// PROTECTED = PODEMOS ACCEDER DESDE LA CLASE QUE LOS DEFINE Y DESDE CLASES QUE HEREDEN ESTA CLASE
	protected $marca;

	// PRIVATE = UNICAMENTE SE PUEDE ACCEDER DESDE ESTA CLASE
	private $modelo;



	public $velocidad;
	public $caballaje;
	public $plaza;

	// PODEMOS DECLARAR LOS VALORES DE LAS PROPIEDADES DE ESTA MANERA:

	/*public function __construct() {
		$this->color = 'verde';
		$this->marca = 'tesla';
		$this->modelo = 'tesla modelo y';
		$this->velocidad = 400;
		$this->caballaje = 200;
		$this->plaza = 3;
	}*/

	// O PODEMOS PASARLE LOS VALORES DIRECTAMENTE COMO PARAMETROS

	public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plaza) {
		$this->color = $color;
		$this->marca = $marca;
		$this->modelo = $modelo;
		$this->velocidad = $velocidad;
		$this->caballaje = $caballaje;
		$this->plaza = $plaza;
	}

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