<?php  

require('claseEmpleado.php');

$empleado = new Empleado();

$empleado->set_numCuenta('0102030405');

echo $empleado->get_numCuenta();

?>