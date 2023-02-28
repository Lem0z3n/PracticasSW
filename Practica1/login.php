
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="estilo.css" />
  <title>Formulario Básico</title>
</head>
<body>
    <div id = "contenedor">
        <?php include 'cabecera.php' ?>

        <?php include 'sidebarIzq.php' ?>
        <main id="contenido">
            <?php
            if (!isset($_SESSION["login"])) { //Usuario incorrecto
                echo "<h1>ERROR</h1>";
                echo "<p>El usuario o contraseña no son válidos.</p>";
            }
            else { //Usuario registrado
                echo "<h1>Bienvenido {$_SESSION['nombre']}</h1>";
                echo "<p>Usa el menú de la izquierda para navegar.</p>";
            }   
            $username = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
            $password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));
            if ($username == "pepe" && $password == "123456") {
                $_SESSION["login"] = true;
                $_SESSION["nombre"] = "Usuario";
            }
            else if ($username == "admin" && $password == "adminpass") {
                $_SESSION["login"] = true;
                $_SESSION["nombre"] = "Administrador";
                $_SESSION["esAdmin"] = true;
            }
            ?>

            <form method="POST" action="procesaForm.php">
                <div>
                    <label for="usernameForm">Usuario: </label>
                    <input type="text" id="usernameForm" name="nombre" value="<?= $username ?>" />
                </div>
                <div>
                    <label for="passwordForm">Contraseña: </label>
                    <input type="text" id="passwordForm" name="apellido" value="<?= $password ?>" />
                </div>
                <div>
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </main>
       

       

     

     <?php include 'sidebarDer.php' ?>

     <?php include 'pie.php' ?>
    </div>
</body>
</html>