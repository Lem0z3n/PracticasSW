<!DOCTYPE html>

<html>
	<head> 
		<title>PHP</title>
	</head>
	<body>
		<h1>¿No te ha quedado claro el saludo?</h1>

		<?php
			$vueltas = $_GET['num'];    //Para leer el parámetro que venía en la dirección (e.g. ?num=50)

			for ($i = 0; $i < $vueltas; $i++) {
				echo '<p>' . $i . ' - ¡Hola Mundo!</p>';
			}
		?>
	</body>
</html>