
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
            <form method="POST" action="procesarLogin.php">
                <div>
                    <label for="username">Usuario: </label>
                    <input type="text" id="username" name="username" value="<?= $username ?>" />
                </div>
                <div>
                    <label for="password">Contraseña: </label>
                    <input type="password" id="password" name="password" value="<?= $password ?>" />
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