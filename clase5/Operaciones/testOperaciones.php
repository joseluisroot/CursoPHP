<?php  

require('claseOperaciones.php');

$operaciones = new Operaciones(3,2);


echo $operaciones->Suma();
echo "<br>";
echo $operaciones->Resta();



?>