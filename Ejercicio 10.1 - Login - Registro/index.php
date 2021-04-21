<?php session_start()?>
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
    <?php include "formularios/login.php" ?>
    <?php include "formularios/registro.php" ?>
    <?php include "formularios/encabezado.php" ?>
    <?php if (isset($_SESSION["alerta"])) {
        if($_SESSION["alerta"] != "") {?>
        <script>
            document.getElementById("login").style.display = "flex";
            document.getElementById("cartel").innerHTML = <?= $_SESSION["alerta"] ?>;
        </script>
    <?php }}
    $_SESSION["alerta"] = "";
    ?>

    <div class="cuerpo"></div>
    <?php include "formularios/pie.php" ?>
</body>
</html>