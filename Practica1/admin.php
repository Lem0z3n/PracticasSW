<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Portada</title>
</head>

<body>

<div id="contenedor">

	<?php include 'cabecera.php' ?>

	<?php include 'sidebarIzq.php' ?>

	<main id = "contenido">
        <?php
             if (!isset($_SESSION["esAdmin"])) { //Usuario noadmin
                echo "<h1>Tu no puedes mirar esto forastero</h1>";
                echo "<p>Este es contenido esclusivo para administradores</p>";
                echo '<img src="madGandalf.gif">';
            }
            else { //Usuario admin
                echo "<h1>Consola de administracion</h1>";
                echo "<p>esto es un mensaje de administracion, hola :D</p>";
                echo '<img src="happyGandalf.gif">';
            }
        ?>   
	</main>

	
	<?php include 'sidebarDer.php' ?>

	<?php include 'pie.php' ?>

</div> <!-- Fin del contenedor -->

</body>
</html>