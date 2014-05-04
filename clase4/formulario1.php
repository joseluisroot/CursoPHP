<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jqueryUI.js"></script>
	<script type="text/javascript" src="js/jqueryvalidation.js"></script>

	<link rel="stylesheet" href="css/jqueryUI.css">
	<link rel="stylesheet" href="css/estilo.css">
	<title>.::Formularios::.</title>
	<script type="text/javascript">
	var x= $(document);
	x.ready(inicializar);
	function inicializar(){
		var x=$("#boton");
		x.button();
		$('#miForm1').validate(
		{
			rules :{
				mi_email : {
					required : true, //para validar campo vacio
					email : true //para validar formato email
				},
				mi_nombre : {
					required : true,
					minlength : 3, //para validar campo con minimo 3 caracteres
					maxlength : 9 //para validar campo con maximo 9 caracteres
				},
				mi_edad : {
					required : true,
					number : true //para validar campo solo numeros
				},

			},
				messages : {
					mi_email : {
						email : "Debe ingresar un e-mail válido."
					},
					mi_nombre: {
						required : "Nombre requerido",
						minlength: "El nombre debe tener mas de 3 caracteres",
						maxlength:"Maxima cantidad de caracteres 9"
					},
					mi_edad : {
						required:"Por favor ingrese su edad",
						number:"Por favor ingrese un numero"
					}

				},


		}
			);
		}	
	</script>
</head>
<body>
	<h1>Validacion de formulario y envío de datos a servidor</h1>
	<form action="datosRecibidos.php" id="miForm1">
		<table border="2">
			<tr>
				<td>Nombre</td>
				<td><input type="text" class="required" name="mi_nombre"></td>
			</tr>
			<tr>
				<td>Pa&iacute;s</td>
				<td>
					<select class="required" name="mi_pais">
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
					<input type="text" class="required" name="mi_email">
				</td>
			</tr>
			<tr>
				<td>Edad</td>
				<td><input type="text" class="required" name="mi_edad"></td>
			</tr>
			<tr>
				<td colspan="2" class="centrado">
					<input type="submit" value="Enviar" id="boton">
				</td>				
			</tr>
		</table>
		
		
		
	</form>
</body>
</html>