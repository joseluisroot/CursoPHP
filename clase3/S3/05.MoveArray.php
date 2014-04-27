<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<div id="contenedor">
	<h1>Moviendonos por las posiciones de un arreglo</h1>
		<?php  
			$libros=array("POO","PHP","Java",".NET");
			echo "El arreglo:<br> ".print_r($libros,true);
			echo "<hr>";

			echo "El elemento actual del arreglo es: ".current($libros);
			echo "<br> Y el indice es: ".key($libros);
			echo "<hr>";

			echo "El siguiente elemento del arreglo es: ".next($libros);
			echo "<br> Y el indice es: ".key($libros);
			echo "<hr>";

			echo "El ultimo elemento del arreglo es: ".end($libros);
			echo "<br> Y el indice es: ".key($libros);
			echo "<hr>";

			echo "El anterior al ultimo es: ".prev($libros);
			echo "<br> Y el indice es: ".key($libros);
			echo "<hr>";

			echo "Nuevamente el primer elemento del arreglo es: ".reset($libros);
			echo "<br> Y el indice es: ".key($libros);
			/*Las funciones anteriores mueven el puntero del indice del arreglo,
			a excepcion de current y key que solo devuelven el valor y el índice 
			en el que se encuentra un elemento
			Si un elemento no se puede extraer cada una de estas funciones 
			devuelve false*/
		?>
	</div>
</body>	
</html>
