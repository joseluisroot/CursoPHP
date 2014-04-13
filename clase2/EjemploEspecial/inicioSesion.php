<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/tableEstilo.css">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jqueryUI.js"></script>
	<link rel="stylesheet" href="css/jqueryUI.css">
	<script type="text/javascript">
		var x=$(document);
		x.ready(inicializar);
		function inicializar(){
			var x=$("#boton2");
			x.button();
			$("#CSS_Table_Example").hide();
			var x=$("#boton1");
			x.click(muestraHtml);
		}

		function muestraHtml(){
		$("#CSS_Table_Example").toggle("slow");

		}

	</script>

</head>
<body>
	<button id="boton1">
		<img src="images/inicioSesion.jpg">
	</button>
	<center>
		<div id="CSS_Table_Example">
			<form action="index.php" method="POST">
				<table>
					<tr>
						<td colspan="2">Inicio de Sesion</td>
					</tr>
					<tr>
						<td>Usuario:</td>
						<td><input type="text" name="usuario"></td>
					</tr>
					<tr>
						<td>Clave:</td>
						<td><input type="text" name="clave"></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center">
						<input type="submit" value="Ingresar" name="enviar" id="boton2"></td>
					</tr>
				</table>
			</form>
		</div>
		<p id="parrafo"></p>
	</center>
</body>
</html>
