<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jqueryUI.js"></script>
	<!--<script type="text/javascript" src="js/jqueryvalidation.js"></script>-->
	<script type="text/javascript" src="js/livevalidation.js"></script>

	<link rel="stylesheet" href="css/jqueryUI.css">
	<link rel="stylesheet" href="css/estilo.css">
	<title>.::Formularios::.</title>
	<script type="text/javascript">
	var x= $(document);
	x.ready(inicializar);
	function inicializar()
	{
		var x=$("#boton");
		x.button();
		x.click(validar);		
	}	
	function validar(){
		var x = new LiveValidation('mi_nombre');
		x.add(Validate.Presence,{ failureMessage: "Complete el nombre por favor" });
		var x = new LiveValidation('mi_pais');
		x.add(Validate.Presence,{ failureMessage: "Por favor seleccione un pais" });
		var x = new LiveValidation('mi_email');
		x.add(Validate.Presence,{ failureMessage: "Por favor ingrese su correo" });
		x.add(Validate.Email,{ failureMessage: "Correo no válido" } );
		var x= new LiveValidation('mi_edad');
		x.add(Validate.Numericality, {minimum: 1, maximum:125, tooHighMessage: "Edad no válida"});

	}
	</script>
</head>
<body>
	<h1>Validacion de formulario y envío de datos a servidor</h1>
	<form action="datosRecibidos.php" id="miForm1" method="POST">
		<table>
			<tr>
				<td>Nombre</td>
				<td><input type="text" class="required" id="mi_nombre" name="nombre"></td>
			</tr>
			<tr>
				<td>Pa&iacute;s</td>
				<td>
					<select class="required" id="mi_pais" name="pais">
						<option value=""></option>
						<option value="1">El Salvador</option>
						<option value="2">Guatemala</option>
						<option value="3">Honduras</option>
					</select>					
				</td>
			</tr>
			<tr>
				<td>
					Correo
				</td>
				<td>
					<input type="text" class="required" id="mi_email" name="mail">
				</td>
			</tr>
			<tr>
				<td>Edad</td>
				<td><input type="text" class="required" id="mi_edad" name="edad"></td>
			</tr>
			<tr>
				<td colspan="2" class="centrado">
					<input type="submit" value="Enviar" id="boton" name="enviar">
				</td>				
			</tr>
		</table>
		
		
		
	</form>
</body>
</html>