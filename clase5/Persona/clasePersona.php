<?php 

/**
* 
*/
class Persona
{
	// el Ambito por defecto es public;
	// y es accesado desde cualquier lado, archivo, donde se declare la instancia.
	// 
	// private acceso solamente dentro de la clase donde pertenece. se puede interpretar como interna.
	// 
	// protected tiene acceso dentro de la clase y dentro de las clases hijas
	// 
	// 
	public $nombre;
	public $apellido;
	public $edad;


	private $password;
	protected $numCuenta;

	public static $tipoSangre = "ORH-";

	const genero="Masculino";

	public function set_password($passwordEnviado){
		$this->password=$passwordEnviado;
	}

	public function get_password(){
		return $this->password;
	}

	public function get_numCuenta() {
	    return $this->numCuenta;
	}
	 
	public function set_numCuenta($numCuenta) {
	    $this->numCuenta = $numCuenta;
	}
	
}

?>