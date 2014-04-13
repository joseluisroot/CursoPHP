<?php  
	$cadena="Hola mundo";
	echo strstr($cadena, "mund");

	echo "<br>";

	echo strstr($cadena, "xyz")?"Encontrado":"No encontrado";
	echo "<br>";

	echo strstr($cadena, "mund", true);

?>