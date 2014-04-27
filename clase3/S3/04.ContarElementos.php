<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<div id="contenedor">
		<h1>Conocer cantidad de elementos de un arreglo</h1>
	<?php 
	$alumnos=array( 0=>"alumno1",
					1=>"alumno2",
					2=>"alumno3",
					3=>"alumno4",
					4=>"alumno5");
					//47=>"alumno5"); --> Ojo con esto
	echo "Cantidad de elementos en arreglo: ".count($alumnos);
	echo "<hr>";
	$ultimoElemento=count($alumnos)-1;
	echo "El elemento $alumnos[$ultimoElemento] del arreglo tiene
	 el indice: ".$ultimoElemento;
	?>
	</div>
</body>
</html>
