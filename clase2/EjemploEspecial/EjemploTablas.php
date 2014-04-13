<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
	#tabla{
		width: 30%;
		float: left;
		height: auto;
		
		margin: 5px;
	}

	</style>
</head>
<body>



<?php 
for ($i=1;$i<10; $i++) 

{ 
?>
<div id="tabla">
	<table border="2">
		<tr>
			<th>ENCABEZADO 1</th>
			<th>ENCABEZADO 2</th>
		</tr>
		<tr>
			<td>CELDA 1</td>
			<td>CELDA 2</td>
		</tr>
	</table>
</div>
<?php
}
?>

</body>
</html>
