<!DOCTYPE html>

<html>
	<head> 
		<title>PHP</title>
	</head>
	<body>
		<h1>¿No te ha quedado claro el saludo?</h1>
		<?php

			for ($i = 0; $i < 50; $i++) {
				echo '<p>' . $i . ' - ¡Hola Mundo!</p>';
			}
		?>
	</body>
</html>