<?php  

class Vehiculo{

	public $marca;
	public $anyo;
	public $color;

	function __construct($marcaInicial, $colorInicial){

		$this->marca = $marcaInicial;
		$this->color = $colorInicial;
	}

	//este valor siempre debe de ir sin nada y siempre al final de la clase
	function __destruct(){
		
	}


}

?>