<?php  
	
	/*
	Crear una matriz de 5 filas y 4 columnas.
	Los valores de cada elemento seran generados de forma aleatoria con numero entre 1 y 100.
	Mostrar la matriz en una tabla e imprimir el numero mayor de la matriz y la fila y 
	la columna en la que se encuentra
	 */
	
	$arreglo = array();
	$mayor = 0;
	$fila=0;
	$columna=0;
	echo "<table border='1px'>";
	for ($i=0; $i <= 3 ; $i++) {
		echo "<tr>"; 
		for ($j=0; $j <=4 ; $j++) {
			echo "<td>" ;
			echo $arreglo[$i][$j]=rand(1,100);
			echo "</td>";
			if ($arreglo[$i][$j]>=$mayor){
				$mayor=$arreglo[$i][$j];
				$fila=$i+1;
				$columna=$j+1;
			}

		}
		echo "</tr>";
	}
	echo "</table>";

	echo "EL numero mayor= $mayor, posicion: fila =".$fila.", columna =".$columna;

	/*var_dump($arreglo);
	echo "<hr>";*/
?>