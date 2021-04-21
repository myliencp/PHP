<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background: rgb(0, 0, 0, 0.350);
        }
    </style>
    <?php    
            # Iniciar sesión para usar $_SESSION
            session_start();

            # Y ahora leer si NO hay algo llamado usuario en la sesión,
            # usando empty (vacío, ¿está vacío?)
            # Recomiendo: https://parzibyte.me/blog/2018/08/09/isset-vs-empty-en-php/
            if (empty($_SESSION["usuario"])) {
                # Lo redireccionamos al formulario de inicio de sesión
                header("Location: formulario.html");
                # Y salimos del script
                exit();
            }

            # No hace falta un else, pues si el usuario no se loguea, todo lo de abajo no se ejecuta

            echo "Bienvenido ",$_SESSION["usuario"];
        ?>
        <h1>
             Soy una página  que solamente pueden ver los usuarios logueados
        </h1>
        <!-- Le indicamos al usuario un enlace para salir-->
        <a href="index.php">Cerrar sesión</a>
</body>
</html>
<?php


