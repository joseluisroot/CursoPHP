<?php  

/**
* 
*/
class Numeros
{
	
	public $numUno;
	public $numDos;

	function __construct($numUnoInicial, $numDosInicial)
	{
		$this->numUno=$numUnoInicial;
		$this->numDos=$numDosInicial;
	}

	public function get_numUno() {
	    return $this->numUno;
	}
 
	public function set_numUno($numUno) {
	    $this->numUno = $numUno;
	}

	public function get_numDos() {
	    return $this->numDos;
	}
	 
	public function set_numDos($numDos) {
	    $this->numDos = $numDos;
	}

	
}

?>