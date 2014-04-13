<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Ejercicios PHP</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>  
        <section>
        	<h1>
        		 <?php 

                    $rol='tecnico';

                    switch ($rol) {
                        case 'admin':
                           header("location:admin/");
                            break;
                        case 'tecnico':
                                header("location:moderador/");
                                break;    
                        
                        default:
                            header("location:usuario/");
                            break;
                    }
		         
		         ?>
        	</h1>
          
        </section>
    </body>
</html>