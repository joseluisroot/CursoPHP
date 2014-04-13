<?php  
	$cadena="y ella le dijo buenos dias señor y el le contesto buenos dias"; 
	echo "string"; $cadena."<br>";
	echo substr_count($cadena, "dias");
	echo "<br>";
	echo substr_count($cadena, "le", 10,40);
	
?>