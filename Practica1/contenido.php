<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contenido</title>
</head>

<body>

<div id="contenedor">

	<?php include 'cabecera.php' ?>

	<?php include 'sidebarIzq.php' ?>

	<?php
        (isset($_SESSION["login"])) ? include 'contenidoUsuario.php' : include 'contenidoError.php';
    ?>

	
	<?php include 'sidebarDer.php' ?>

	<?php include 'pie.php' ?>

</div> <!-- Fin del contenedor -->

</body>
</html>