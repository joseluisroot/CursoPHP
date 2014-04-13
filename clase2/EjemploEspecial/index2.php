<?php 
if(isset($_POST['enviar']))
{
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
//echo $usuario;

//echo $clave;
$claveEncriptada=md5($clave);
echo "<hr>";
echo "Clave encriptada con MD5: ".$claveEncriptada;
$claveSha=sha1($clave);
echo "<hr>";
echo "Clave encriptada con SHA1: ".$claveSha;
$claveHashMD5=hash("MD5", $clave);
echo "<hr>";
echo "Clave encriptada con MD5 usando hash: ".$claveHashMD5;
echo "<hr>";
foreach (hash_algos() as $v) { 
        $r = hash($v, $clave, false); 
        printf("%-12s %3d %s\n", $v, strlen($r), $r); 
        echo "<hr>";
} 


}
else{

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/tableEstilo.css">
	<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jqueryUI.js"></script>

	<script type="text/javascript">
		var x=$(document);
		x.ready(inicializar);	

		function inicializar(){			
		$("#CSS_Table_Example").hide();
		var x=$("#boton2");
		x.button();
		var x=$("#boton1");
		x.click(muestraHmtl);		
		}
		function muestraHmtl(){					
				var x;
				x=$("#CSS_Table_Example").toggle("slow");//toggle permite hacer ambos eventos en un solo
				//boton
				//.show(3000) ó .fadeIn("slow")	
				//ó fadeTo("fast",0.5) el segundo argumento es la opacidad	
				//slideUp("slow")	slideDown("slow") slideToggle("slow")
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
						<td colspan="2">
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