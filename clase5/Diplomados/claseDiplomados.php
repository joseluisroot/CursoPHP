<?php  

/**
* 
*/
class Diplomado
{
	private $nombre;
	private $cantHoras;
	private $fechaInicio;
	private $fechaFin;

	function __construct($nombre, $cantHoras, $fechaInicio, $fechaFin)
	{
		$this->nombre=$nombre;
		$this->cantHoras=$cantHoras;
		$this->fechaInicio=$fechaInicio;
		$this->fechaFin=$fechaFin;
	}


	public function get_nombre() {
	    return $this->nombre;
	}
	 
	public function set_nombre($nombre) {
	    $this->nombre = $nombre;
	}

	public function get_cantHoras() {
	    return $this->cantHoras;
	}
	 
	public function set_cantHoras($cantHoras) {
	    $this->cantHoras = $cantHoras;
	}

	public function get_fechaInicio() {
	    return $this->fechaInicio;
	}
	 
	public function set_fechaInicio($fechaInicio) {
	    $this->fechaInicio = $fechaInicio;
	}

	public function get_fechaFin() {
	    return $this->fechaFin;
	}
	 
	public function set_fechaFin($fechaFin) {
	    $this->fechaFin = $fechaFin;
	}

}

?>