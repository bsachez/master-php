<?php

// HERENCIA = LA POSIBILIDAD DE COMPARTIR ATRIBUTOS Y METODOS ENTRE CLASES

class Personas {

	public $nombre;
	public $apellidos;
	public $altura;
	public $edad;

	public function getNombre() {
		return $this->nombre;
	}

	public function getApellidos() {
		return $this->apellidos;
	}

	public function getAltura() {
		return $this->altura;
	}

	public function getEdad() {
		return $this->edad;
	}

	public function setNombre($nombre) {
		return $this->nombre = $nombre;
	}

	public function setApellidos($apellidos) {
		return $this->apellidos = $apellidos;
	}

	public function setAltura($altura) {
		return $this->altura = $altura;
	}

	public function setEdad($edad) {
		return $this->edad = $edad;
	}

	public function hablar() {
		return "Estoy hablando";
	}

	public function caminar() {
		return "Estoy caminando";
	}

}

// HEREDAR LOS ATRIBUTOS DE OTRAS CLASES

class Informatico extends Personas{
	public $lenguajes;

	public function sabeLenguajes($lenguajes) {
		$this->lenguajes = $lenguajes;

		return $this->lenguajes;
	}

	public function programar() {
		return "Soy programador";
	}

	public function repararOrdenador() {
		return "Reparar Ordenador";
	}

	public function hacerOfimatica() {
		return "Estoy escribiendo en word";
	}
}