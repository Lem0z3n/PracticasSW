<?php
require_once 'config.php';
?>
<header>
		<h1>Mi gran página web</h1>
		<div class="saludo">
		<?php 
            if(isset($_SESSION['username'])) {
             echo "<span>Bienvenido: {$_SESSION['username']} </span>";
             echo "<a href = 'logout.php'> Cerrar Sesión</a>";
            }else{
             echo "<span>Usuario desconocido. </span>" ;
             echo "<a href='login.php'>Login</a>";
            }
        ?>
        </div>
</header>