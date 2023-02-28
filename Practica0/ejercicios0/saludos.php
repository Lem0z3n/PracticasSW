<!DOCTYPE html>

<html>
	<head> 
		<title>PHP</title>
	</head>
	<body>
		<?php
			$vueltas = $_GET['num'];    //Para leer el parámetro que venía en la dirección (e.g. ?num=50)
			if($vueltas == 42) {
				echo '<h1> Me has pedido que te salude 42 veces. </h1>';
				echo '<p> En realidad, esa es la respuesta a la pregunta final sobre la vida, el universo y todo lo demás.</p>';
			}else{
				echo '<h1>¿No te ha quedado claro el saludo?</h1>';
				for ($i = 0; $i < $vueltas; $i++) {
					echo '<p>' . $i . ' - ¡Hola Mundo!</p>';
				}
			}
		?>
	</body>
</html>