<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if (empty($_SESSION["usuario"])){
            //Redireccionamos a la pagina principal
            header("Location: index.php");
            //Salimos
            //exit();
        }
        echo "Bienvenid@ ", $_SESSION["usuario"];
        if (isset($_POST["cerrarSesion"])){
            session_start();
            session_destroy();
            // unset ($_SESSION["usuario"]);
            // unset ($_SESSION["contraseña"]);
            header("Location: index.php");
        }
    ?>
     <form action="inicial.php" method="POST">
        <button type="submit" name="cerrarSesion" id="cerrarSesion">Cerrar Sesión</button>
    </form>
    <h1>Página principal de usuarios registrados</h1>
    <img src="imagenes/gifcrop.gif" alt="">
   

   
</body>
</html>