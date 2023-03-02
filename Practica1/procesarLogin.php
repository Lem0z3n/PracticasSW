

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

        <?php  
            $username = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
            $password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));
            
            if ((strcmp($username,"pepe") == 0) && (strcmp("123456",$password) == 0)) {
                $_SESSION["login"] = true;
                $_SESSION["nombre"] = "Usuario";
            }
            else if ($username == "admin" && $password == "adminpass") {
                $_SESSION["login"] = true;
                $_SESSION["nombre"] = "Administrador";
                $_SESSION["esAdmin"] = true;
            }
?>

        <?php include 'sidebarIzq.php' ?>

        <main id ="contenido">

            <?php if (!$_SESSION["login"]) { //Usuario incorrecto
                        echo "<h1>ERROR</h1>";
                        echo "<p>El usuario o contraseña no son válidos.</p>";
                    }
                    else { //Usuario registrado
                        echo "<h1>Bienvenido {$_SESSION['nombre']}</h1>";
                        echo "<p>Usa el menú de la izquierda para navegar.</p>";
                    } 
            ?>

        </main>

        <?php include 'sidebarDer.php' ?>

        <?php include 'pie.php' ?>
    </div>
</body>


</html>