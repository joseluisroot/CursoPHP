<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 

	$ancho=0;
	$largo=0;

	do {
		$ancho++;
		$largo++;
		$area=$ancho*$largo;
	} while ( $area <= 1000);

	echo "El cuadrado más pequeño que cabe en una area de 1000mts tiene las medidas:".$largo.
		 " de largo y ".$ancho." de ancho";

	?>
</body>
</html>