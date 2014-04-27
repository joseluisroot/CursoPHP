<?php 

$arreglo = array(2,3,4,5,[7,8,9]);

/*$notas[]=1;
$notas[]=2;
$notas[]=3;
$notas[]=4;*/

$arreglo2 = array("nombre"=>"Jose Luis","edad"=>28);

$arreglo3 = array([["1",["1.1","1.2","1.3"]],"2","3"],["4","5","6"],["7","8","9"]);

var_dump($arreglo);
echo "<hr>";
var_dump($arreglo2);
echo "<hr>";
var_dump($arreglo3[0]);
?>