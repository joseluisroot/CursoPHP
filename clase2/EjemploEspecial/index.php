<?php 
/*isset --> para saber si una 
variable tiene algun valor*/
if(isset($_POST['enviar']))
{
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];
	//echo $usuario;
	//echo "<hr>";
	echo "Clave original: ".$clave;
	echo "<hr>";
	$cifradoMD5=md5($clave);
	echo "cifrado md5: ".$cifradoMD5;
	echo "<hr>";
	$cifradoSHA1=sha1($clave);
	echo "cifrado sha1: ".$cifradoSHA1;
	echo "<hr>";
	$cifradoHash=hash("md5", $clave);
	echo "cifrado md5 con hash: ".$cifradoHash;
	foreach (hash_algos() as $v) { 
        $r = hash($v, $clave, false); 
        printf("%-12s %3d %s\n", $v, strlen($r), $r); 
        echo "<hr>";
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
	<link rel="stylesheet" href="css/estiloTabla.css">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jqueryUI.js"></script>
	<link rel="stylesheet" href="css/jqueryUI.css">
	<script type="text/javascript">
		var x=$(document);
		x.ready(inicializar);
		function inicializar(){
			$("#CSS_Table_Example").hide();
			var x=$("#boton2");
			x.button();
			var x=$("#boton1");
			x.click(mostrar);
		}
		function mostrar(){
			$("#CSS_Table_Example").toggle("slow");
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
<?php 
}
?>
