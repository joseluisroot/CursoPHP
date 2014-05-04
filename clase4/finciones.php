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

//Crear una funcion que calcule y muestre en una tabal los descuentos de AFP, ISS, RENTA para N empleados

function calcularRenta($Arreglo){

	$operar= array();

	$calc= array();



	foreach ($Arreglo as $indice => $value) {

		 $calc= $value;
		//renta*0.1
		//afp*0.07
		//isss*0.04
		
		$operar = ("empleado" => $value[0]);

//echo $value[1]*0.04;
//echo "<br>";
		var_dump($operar);
		//
		
		/*
		,
				   'Renta'=> $value[1]*0.1,
				   'AFP'=> $value[1]*0.07,
				   'ISSS'=> $value[1]*0.04
		 */




	}

}



$numero = array(['tolo',600],['emilia',100],['daniela',700]);

calcularRenta($numero);

//var_dump(operaciones($numero));

?>