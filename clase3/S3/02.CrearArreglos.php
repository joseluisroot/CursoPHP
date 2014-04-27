<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<div id="contenedor">
	<h1>Diferentes formas para crear tus arrays</h1>
	<?php 
		//Primera forma para crear arreglos
		$alumnos=array("alumno1","alumno2","alumno3","alumno4");
		print_r($alumnos);
		echo "<hr>";

		//Forma dos de crearlo:
		$alumnos2[0]="alumno1";
		$alumnos2[1]="alumno2";
		$alumnos2[2]="alumno3";
		$alumnos2[3]="alumno4";
		print_r($alumnos2);

		echo "<hr>";
		//Forma tres de crearlo
		$alumnos3[]="alumno1";
		$alumnos3[]="alumno2";
		$alumnos3[]="alumno3";
		$alumnos3[]="alumno4";
		print_r($alumnos3);
	?>
	</div>
</body>
</html>
