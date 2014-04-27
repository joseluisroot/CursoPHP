<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<div id="contenedor">
		<h1>
			Funcion array_slice<br> Obtener un rango de valores 
			dentro de un arreglo
		</h1>
		<?php 
			/*
			array_slice() --> permite obtener un rango de valores 
			dentro de un arreglo */
			$ordenesPendientes=array("Juan","Mario","Ana","Pedro","Jorge");
			$primerasOrdenesPendientes=array_slice($ordenesPendientes,1,2);


			//El segundo parametro es donde iniciara a tomar los valores
			//del arreglo y el tercero cuantos valores tomara
			print_r($ordenesPendientes);
			echo "<hr>";
			print_r($primerasOrdenesPendientes);

			//Con el cuarto parametro en true mantiene el numero del indice
			//para cada elemento extraido
			echo "<hr>";
			$nuevoArreglo=array_slice($ordenesPendientes, 1,2,true);
			print_r($nuevoArreglo);
		?>		
	</div>	
</body>
</html>
