<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		$existencias= 28;

		$prodSuf= "No es necesario comprar productos";
		$prodInsuf= "Existencia baja de productos";

		echo ($existencias>=12)?$prodSuf:$prodInsuf;

	 ?>
	
</body>
</html>