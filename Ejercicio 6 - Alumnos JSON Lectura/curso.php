<?php require_once "ficheros/compartidos/clases.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once "ficheros/compartidos/encabezado.php"?>
    <h2>Listado de alumnos</h2>
    <div class="contenedor">
            <div class="elemento" style="background-color: lightgrey;">FOTO</div>
            <div class="elemento" style="background-color: lightgrey;">ID</div>
            <div class="elemento" style="background-color: lightgrey;">NOMBRE</div>
            <div class="elemento" style="background-color: lightgrey;">APELLIDOS</div>
            <div class="elemento" style="background-color: lightgrey;">EMAIL</div>
            <div class="elemento" style="background-color: lightgrey;">TELEFONO</div>
            <div class="elemento" style="background-color: lightgrey;">WEB</div>
    <?php
        $listado = new ficheroJson('ficheros/alumnos.json','alumnos');
        foreach ($listado->lista as $alumno) {
            $objeto = (object)($alumno);?>
            <div class="elemento">
                <?php if(isset($objeto->imagen)) {?>
                    <img class="imagen" src="<?php echo 'ficheros/imagenes/'.$objeto->imagen?>" >
                <?php }; ?>
            </div>
            <div class="elemento"><?= $objeto->id ?></div>
            <div class="elemento"><?= $objeto->nombre ?></div>
            <div class="elemento"><?= $objeto->apellidos ?></div>
            <div class="elemento"><?= $objeto->email ?></div>
            <div class="elemento"><?= $objeto->telefono ?></div>
            <div class="elemento"><?= $objeto->web ?></div>
            <?php }  ?>
        </div>
    <?php include_once "ficheros/compartidos/pie.php"?>
</body>
</html>
