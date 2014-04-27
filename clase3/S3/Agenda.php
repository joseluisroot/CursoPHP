<!DOCTYPE html>
<html lang="esp">
<head>
<title>Ejercicio 3 Semana 6</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
<style type="text/css">
	label{
		margin: 15px;
	}
</style>
</head>
<body>
<h1>Ejercicio Agenda</h1>
<div id="contenedor" style="width:250px; height: 200px">
<h3>Paginacion en array</h3>
<?php
/**
 * @author salvador
 * @copyright 2014
Utilizando arrays crear un script que funcione como 
una agenda personal, 
el arreglo deberá tener los siguientes elementos 
(Nombre completo del contacto, teléfono casa, 
teléfono celular,
 dirección, mail). 
El script contara con opciones de  navegación 
para mostrar los registros
 Mínimo 5 Registros. 
*/
$datos=array(
			0 => array(
				0=>'Salvador',
				1=>'22577777',
				2=>'75555555',
				3=>'Calle Morena',	
				4=>'salvador@hotmail.com',
				),
			1 => array(
				0=>'Juan',
				1=>'55457458',
				2=>'78978546',
				3=>'Colonia las magnolias',	
				4=>'juan@gmail.com',
				),
			2 => array(
				0=>'Maria',
				1=>'35457458',
				2=>'78978546',
				3=>'Avenida',	
				4=>'maria@gmail.com',
				),
			3 => array(
				0=>'Pepito',
				1=>'21345643',
				2=>'78978546',
				3=>'Pepitolandia',	
				4=>'jocote@gmail.com',
				),
			4 => array(
				0=>'Karla',
				1=>'25457458',
				2=>'78978546',
				3=>'Las mafiosas',	
				4=>'karla@gmail.com',
				),
			5 => array(
				0=>'Cipitio',
				1=>'25457458',
				2=>'78978546',
				3=>'Cipitolandia',	
				4=>'cipitote@gmail.com',
				),
			6 => array(
				0=>'Tia BUBU',
				1=>'23457458',
				2=>'78978546',
				3=>'Calle B',	
				4=>'bubusela@gmail.com',
				),
			7 => array(
				0=>'Tencha',
				1=>'55457458',
				2=>'78978546',
				3=>'Cocolitos street',	
				4=>'techis@gmail.com',
				),
			8 => array(
				0=>'Lupe Reyes',
				1=>'25457458',
				2=>'78978546',
				3=>'Las gomiletas',	
				4=>'boligrafo@gmail.com',
				),
			9 => array(
				0=>'Rabiosa',
				1=>'25457458',
				2=>'78978546',
				3=>'Inyenctenla',	
				4=>'chucha_seca@gmail.com',
				),
			10 => array(
				0=>'SOPA',
				1=>'25457458',
				2=>'78978546',
				3=>'Avenida seamos serios hombre',	
				4=>'por_gusto@hotmail.com',
				),
			);
$actual=(isset($_GET['pg']))?intval($_GET['pg']):1;
$contar=count($datos);
$result=$datos[$actual-1];
foreach($result as $valor=>$registro)
{
	switch ($valor) {
		case 0:echo "<label>Nombre</label>";
			break;
		case 1:echo "<label>Tel Casa</label>";
			break;
		case 2:echo "<label>Celular</label>";
			break;
		case 3:echo "<label>Direccion</label>";
			break;	
		case 4:echo "<label>Correo</label>";
			break;		
	}
	echo "<input type='text' value='$registro' > <br>";
}
for($i=1; $i<=$contar; $i++)
{	
	if($i==$actual){
		printf("<a href='#'>[%s]</a>",$i);
	}
	else{
		printf("<a href='?pg=%s'> %s </a>", $i, $i);
		}
}
 ?>
</div>
<br>
<div id="pie">Creado por ing. Salvador Pe&ntilde;a</div>
 </form>
 </body>

</html>
