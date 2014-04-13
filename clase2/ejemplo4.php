<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		$aleatorio=rand(1,100);//Aleatorio entr 1 y 100
		echo "Numero aleatorio: ".$aleatorio."<br />"
		for ($i=0 ; $i < 100 ; $i++ ) { 
			echo $i."<br />";
			if($i==$aleatorio){
				echo "El contador es igual al aleatorio: ". $aleatorio;
				break;//break(2); numero dela iteracion que quiere que se salga
			}
		}
	?>
</body>
</html>