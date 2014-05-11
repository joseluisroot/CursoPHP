<?php  

require('claseNumeros.php');

/**
* 
*/
class Operaciones extends Numeros
{
	
	public function Suma(){

		$resultado = $this->numUno + $this->numDos;

		return $resultado;

	}

	public function Resta(){

		$resultado = $this->numUno - $this->numDos;

		return $resultado;

	}
	
}

?>