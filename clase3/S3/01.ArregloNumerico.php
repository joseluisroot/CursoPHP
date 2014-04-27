<?php 
/*
1. Los arreglos pueden ser de cualquier longitud
2. Los arreglos son variables especiales que permiten guardar
muchos elementos del mismo tipo
3. Los arreglos pueden ser indexados o asociativos. Los 
indexados son aquellos a los que accedemos a través de un 
índice numérico y los asociativos son aquellos a los que accedemos 
a través de un nombre
*/

//ARREGLO INDEXADO
$autores=array("Ted Dekker","Paulo Coelo","Pablo Neruda");

//ARREGLO ASOCIATIVO
$libro=array("titulo"=>"La apuesta del cielo",
			 "autor"=>"Ted Dekker",
			 "anyoPublicacion"=>1990);

$edades=array(  'JUAN'=>18,
				'CARLOS'=>19,
				'FERNANDO'=>17,
				'KARLA'=>16,
				'ANA'=>18,
				'MARIA'=>19,
				'RODRIGO'=>18);

//acceder a elementos en arreglo indexado
echo "Autor en la posicion cero :" .$autores[0];
echo "<br>";
$pos=2;
echo "Autor en la posicion dos: ".$autores[$pos];
echo "<br>";

//acceder a elementos en arreglo asociativo
echo "Edad de Juan ".$edades["JUAN"];

//Cambiar un valor en el arreglo:
echo "<br>";
$autores[0]="Anonimo";
echo $autores[0];

//Agregar un nuevo elemento:
echo "<hr>";
$autores[3]="Nuevo autor";
echo $autores[3];
echo "<hr>";
print_r($autores);

//Otra forma de agregar
echo "<hr>";
$autores[]="Otro autor";
print_r($autores);
?>