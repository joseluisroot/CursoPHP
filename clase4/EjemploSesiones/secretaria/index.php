<?php
session_start();
	if ($_SESSION["activo"] == true) {
	?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1><?php echo $_SESSION["usuario"] ?>Bienvenido</h1>
	<a href="../cerrarSession.php">Cerrar Session</a>
</body>
</html>
<?php }else{
	//echo $_SESSION["activo"];
	header("location: ../?act=false");
}  ?>