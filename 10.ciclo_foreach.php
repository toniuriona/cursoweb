<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);


$marc = array('telefono' => 54743221, 'edad' => 36, 'ciudad' => 'Castelldefels');
$marc = array('telefono' => 677023519, 'edad' => 48, 'ciudad' => 'Castelldefels');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recorrer array asociativo también</title>
</head>
<body>
	<ul>
		<?php
			# Con el ciclo foreach podemos recorrer arrays de una manera muy fácil.
			// foreach($meses as $mes){
			// 	echo '<li>' . $mes . '</li>';
			// }

			# El ciclo foreach también NOS PERMITE recorrer arrays asosiativos.
			foreach($marc as $dato => $valor){
				echo '<li>' . $dato . ' : ' . $valor . '</li>';
			}

		?>
	</ul>
</body>
</html>