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

	<main>
        <?php 
            $_SESSION["login"] = false;
            unset($_SESSION["username"]);
            unset($_SESSION["password"]);
            if(isset($_SESSION["esAdmin"])) 
               unset($_SESSION["esAdmin"]);
        ?>
		<article>
			<h1>Gracias por venir!</h1>
		</article>
	</main>
	
	<?php include 'sidebarDer.php' ?>

	<?php include 'pie.php' ?>

</div> <!-- Fin del contenedor -->

</body>
</html>