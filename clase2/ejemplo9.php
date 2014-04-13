<?php  
	$cadena= "Hola Mundo";

	echo "Analisis=$cadena";
	echo "<br>";

	echo strpos($cadena, "Mun");

	echo "<br>";

	echo strpos($cadena, "xyz");

	if (strpos($cadena, "xyz")==false)
		echo "No encontrar";

	echo "<br>";

	$pos=0;

	while (($pos=strpos($cadena, "o", $pos)) !== false ) {
		echo "La letra o esta en la pocision $pos <br>";
		$pos++;
	}
	echo "<br>";

	echo strpos($cadena, "o");
	echo "<br>";
	echo strrpos($cadena, "o");
?>	