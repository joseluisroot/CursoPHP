<?php 

require('claseDiplomados.php');

$diplomados1 = new Diplomado('Programacion PHP','30','12/06/2015','12/07/2015');
$diplomados2 = new Diplomado('Programacion JAVA','30','10/04/2015','10/06/2015');




//$diplomados1->set_nombre('Programacion PHP');

echo "Datos diplomado1";
echo "<br>";
echo $diplomados1->get_nombre();
echo "<br>";
echo $diplomados1->get_cantHoras();
echo "<br>";
echo $diplomados1->get_fechaInicio();
echo "<br>";
echo $diplomados1->get_fechaFin();

echo "<hr>";

echo "Datos diplomado2";
echo "<br>";
echo $diplomados2->get_nombre();
echo "<br>";
echo $diplomados2->get_cantHoras();
echo "<br>";
echo $diplomados2->get_fechaInicio();
echo "<br>";
echo $diplomados2->get_fechaFin();




?>