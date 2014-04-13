<?php  
	$cadena="Hola mundo";
	echo strpbrk($cadena, "abcd");

	echo "<br>";
	echo strpbrk($cadena, "xyz");
	echo "<br>";

	$username="joseluis.r85@gmail.com";
	if (strpbrk($cadena, "@!"))
		echo "La @ y el signo de admiracion no son parmitidos en el nombre del usuario";
?>