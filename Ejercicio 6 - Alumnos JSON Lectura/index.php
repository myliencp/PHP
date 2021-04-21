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
    <form method="POST" action="formulario.php">
        <input class="boton" type="submit" name="nuevo" value="Nuevo Alumno">  
        <br>
        <br>    
    </form>
    <div class="contenedor">
            <div class="elemento" style="background-color: #A09F9F;">FOTO</div>
            <div class="elemento" style="background-color: #A09F9F;">ID</div>
            <div class="elemento" style="background-color: #A09F9F;">NOMBRE</div>
            <div class="elemento" style="background-color: #A09F9F;">APELLIDOS</div>
            <div class="elemento" style="background-color: #A09F9F;">EMAIL</div>
            <div class="elemento" style="background-color: #A09F9F;">TELEFONO</div>
            <div class="elemento" style="background-color: #A09F9F;">WEB</div>
            <div class="elemento" style="background-color: #A09F9F;">MÉTODOS</div>
    <?php
        $listado = new ficheroJson('ficheros/alumnos.json','alumnos');
        if (isset($_POST["aceptarEliminar"])){
            $listado->borraRegistro('./ficheros/alumnos.json','alumnos',$_POST["id"],$_POST ["imagen"]);
            header('Location: index.php');
        }
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
            <div class="elemento">
                <form method="POST" action="formulario.php">
                    <input type="hidden" name="imagen" value="<?php echo $objeto->imagen ?>">
                    <input type="hidden" name="id" value="<?php echo $objeto->id ?>">    
                    <input type="hidden" name="nombre" value="<?php echo $objeto->nombre ?>">
                    <input type="hidden" name="apellidos" value="<?php echo $objeto->apellidos ?>">
                    <input type="hidden" name="email" value="<?php echo $objeto->email ?>">
                    <input type="hidden" name="telefono" value="<?php echo $objeto->telefono ?>">
                    <input type="hidden" name="web" value="<?php echo $objeto->web ?>">
                    <input  class="boton" type="submit" name="actualizar" value="Actualizar">
                    <button   class="boton" type="button" name="eliminar" id="eliminar" onclick="botonEliminar('<?php echo $objeto->id ?>','<?php echo $objeto->nombre ?>','<?php echo $objeto->apellidos ?>','<?php echo $objeto->imagen ?>')">Eliminar</button>
                </form>
            </div>   
            <?php }  ?>
        </div>
    <?php include_once "ficheros/compartidos/ventana.php"?>    
    <?php include_once "ficheros/compartidos/pie.php"?>
</body>
</html>

