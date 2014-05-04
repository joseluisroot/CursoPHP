<?php  

function operaciones($vector){
	$suma=0;
	$multiplicacion=1;

	foreach ($vector as $indice => $value) {
		$suma+=$value;
		$multiplicacion*=$value;
	}
	$resultados['suma']=$suma;
	$resultados['multi']=$multiplicacion;

	return $resultados;
}


$numero = array(1,2,3,4,5);

var_dump(operaciones($numero));

?>