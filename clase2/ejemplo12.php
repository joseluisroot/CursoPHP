<?php  
	$cadena = "por las noches salia a caminar, por las mañanas regresaba a casa";

	echo str_replace("noches", "mañanas", $cadena);
	echo "<br>";

	str_replace("noches", "mañanas", $cadena, $num);

	echo "<br> El texto fue reemplazado $num veces";

?>