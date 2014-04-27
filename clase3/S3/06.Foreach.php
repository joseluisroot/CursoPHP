<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<div id="contenedor">
		<h1>Foreach</h1>
		<?php 
			//Foreach en Arreglo Indexado:
			$libros=array("POO","PHP","Java",".NET");
			echo "Elementos del arreglo: <br>";

			foreach ($libros as $key => $value) {
				echo $key. "---" .$value."<br>";
			}
			//Foreach en Arreglo Asociativo
			$edades=array(  'JUAN'=>18,
				'CARLOS'=>19,
				'FERNANDO'=>17,
				'KARLA'=>16,
				'ANA'=>18,
				'MARIA'=>19,
				'RODRIGO'=>18);
			echo "<hr>";
			echo "Elementos del arreglo asociativo: <br>";
			foreach ($edades as $key => $value) {
				echo $key. "***" . $value."<br>";
			}

			/*Modificando valores utilizando foreach*/
			echo "<hr>";
			foreach ($libros as $valor) {
				if($valor=="PHP"){
					$valor="Aprendiendo PHP";
					echo $valor;
					}				
			}
			echo "<hr>";
			print_r($libros);
			//En la impresión anterior vemos que no ha cambiado el
			//valor original en el arreglo como esperabamos, esto
			//es así porque devuelve una copia del arreglo. Si
			//queremos hacer una referencia en lugar de una copia
			//del elemento anteponemos & a $valor así:
			echo "<hr>";
			foreach ($libros as &$valor){
				if($valor=="PHP"){
					$valor="Aprendiendo PHP";
					echo $valor;
					}				
			}
			unset($valor);//Quitamos la referencia una vez terminado el bucle
			//Esto es necesario para evitar errores posteriores pues queda 
			//haciendose referencia a dicho valor del arreglo
			echo "<hr>";
			print_r($libros);
		 ?>		
	</div>	
</body>
</html>