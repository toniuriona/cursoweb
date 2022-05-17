<?php

$meses = array(
	'lunes', 'martes', 'Miercoles', 'jueves', 
	'viernes', 'sabado', 'domingo', 
	
);




rsort($meses); //Función del array que queremos ordenar
// rsort($meses); Inverso del array
// rsort($numeros);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meses del Año</title>
</head>
<body>
	<h1>dias de semana</h1>
	<ul>
		<?php
			
				
			
		?>
		<?php
			foreach($meses as $mes){
				echo '<li>' . $mes . '</li>';
			}
		?>
	</ul>
</body>
</html>