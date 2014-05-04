<?php 
		if(isset($_POST["enviar"]))
		{
			/*$nombre=$_REQUEST["nombre"];
			$pais=$_REQUEST["pais"];
			$correo=$_REQUEST["mail"];
			$edad=$_REQUEST["edad"];*/
			foreach ($_POST as $indice => $valor) {
				echo $valor."<br>";
			}
		}
		else
		{
 ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Datos recibidos</h1>
	
</body>
</html>

<?php 
}
 ?>