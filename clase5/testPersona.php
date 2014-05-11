<?php  

require('clasePersona.php');

$persona = new Persona();

$persona->nombre="Jose";
$persona->apellido="Reyes";
$persona->edad="28";
//$persona->password = "12345";
//$persona->numCuenta = "0102030405";



echo $persona->nombre;
echo "<br>";
echo $persona->edad;

//echo $persona->password;

//echo $persona->numCuenta;

$persona->set_password('1234');

echo "<br>";
echo $persona->get_password();

echo "<br>";
echo Persona::$tipoSangre;

echo "<br>";
echo Persona::genero;

?>