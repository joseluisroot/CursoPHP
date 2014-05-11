<?php  

require('claseVehiculo.php');

$vehiculoUno = new Vehiculo("TOYOTA","AZUL");

echo $vehiculoUno->marca;
echo "<br>";
echo $vehiculoUno->color;

?>