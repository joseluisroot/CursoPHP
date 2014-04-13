<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
		#contenedor{
			margin: 0 auto;
			box-shadow: 10px 10px 10px #001100;
			border-radius: 12px;
			border: 1px solid #000011;
			width: 40%;
		}
	</style>
</head>
<body>
	<div id="contenedor">
		<table>
			<tr>
				<th>Usuario</th>
				<th>Correo</th>
			</tr>
			<?php 
				$i=0;
				while ( $i < 10) {
			?>
					<tr>
						<td><input type="text"></td>
						<td><input type="text"></td>
					</tr>
				<?php
					$i++;
				} 
				?>			
		</table>
	</div>
</body>
</html>