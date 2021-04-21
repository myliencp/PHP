<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="cache-control" content="no-cache">
     <meta http-equiv="pragma" content="no-cache">
     <?php header("Expires: Sat, 1 Jul 2000 05:00:00 GMT")?>
     <link rel="stylesheet" href="reset.css">
     <link rel="stylesheet" href="index.css">
     <script defer src="javascript.js"></script>
     <title>Formulario de contacto</title>
</head>
<body>
<?php include './cabecera.php' ?>
<div id="cuerpo">
     <div id="formulario">
          <?php include './formulario.php' ?>
     </div>
     <div id="aside">
          <?php include './aside.php' ?>
     </div>
</div>
<?php include './pie.php' ?>
</body>
</html>