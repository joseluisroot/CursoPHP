<?php 
session_start();
	if (isset($_POST['enviar'])) {
		$usuario = $_POST['usuario'];
		$clave = $_POST['clave'];

		if ($usuario=='admin' && $clave=='admin') {
			$_SESSION["activo"] = true;
			$_SESSION["usuario"] = "Hola! ".$usuario;
			header("location: admin/");
		}elseif ($usuario=='secre' && $clave=='secre') {
			$_SESSION["activo"] = true;
			$_SESSION["usuario"] = "Hola! ".$usuario;
			header("location: secretaria/");
		}elseif ($usuario=='cajero' && $clave=='cajero') {
			$_SESSION["activo"] = true;
			$_SESSION["usuario"] = "Hola! ".$usuario;
			header("location: cajero/");
		}else{
			header("location: ?act=fail");
		}
	}
	else{

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/estiloTabla.css">
	<link rel="stylesheet" href="css/jqueryUI.css">
	<link rel="stylesheet" href="css/styleErrores.css">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jqueryUI.js"></script>
	<script type="text/javascript" src="js/livevalidation.js"></script>	
	<script type="text/javascript">
	var x=$(document);
	x.ready(iniciar);
	function iniciar(){
		var x=$("#boton2");
		x.button();

		x.click(validar);

		$("#CSS_Table_Example").hide();
		var x=$("#boton1");
		x.click(mostrar);
	}
	function mostrar(){
		$("#CSS_Table_Example").toggle("slow");
	}

	function validar(){
		var x = new LiveValidation('usuario');
		x.add(Validate.Presence,{ failureMessage: "*" });

		var x = new LiveValidation('clave');
		x.add(Validate.Presence,{ failureMessage: "*" });
	}
	</script>
</head>
<body>
	<button id="boton1">
		<img src="images/entrar_boton.png">
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
						<td><input type="text" name="usuario" id="usuario"></td>
					</tr>
					<tr>
						<td>Clave:</td>
						<td><input type="text" name="clave" id="clave"></td>
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
<?php 	} ?>