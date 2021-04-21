<?php require_once "ficheros/compartidos/coches.php"; ?>
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
    <h2>Listado de Coches</h2>
    <form method="POST" action="formulario.php">
        <input class="boton" type="submit" name="nuevo" value="Nuevo Registro">  
        <br>
        <br>    
    </form>
    <div class="contenedor">
            <div class="elemento" style="background-color: #A09F9F;">IMAGEN</div>
            <div class="elemento" style="background-color: #A09F9F;">ID</div>
            <div class="elemento" style="background-color: #A09F9F;">MARCA</div>
            <div class="elemento" style="background-color: #A09F9F;">AÑO</div>
            <div class="elemento" style="background-color: #A09F9F;">KILOMETRAJE</div>
            <div class="elemento" style="background-color: #A09F9F;">COMBUSTIBLE</div>
            <div class="elemento" style="background-color: #A09F9F;">PRECIOS</div>
            <div class="elemento" style="background-color: #A09F9F;">MÉTODOS</div>
    <?php
        $listado = new ficheroJson('ficheros/coches.json','coches');
        if (isset($_POST["aceptarEliminar"])){
            $listado->borraRegistro('./ficheros/coches.json','coches',$_POST["id"],$_POST ["imagen"]);
            header('Location: index.php');
        }
        foreach ($listado->lista as $coche) {
            $objeto = (object)($coche);?>
            <div class="elemento">
                <?php if(isset($objeto->imagen)) {?>
                    <img class="imagen" src="<?php echo 'ficheros/imagenes/'.$objeto->imagen?>" >
                <?php }; ?>
            </div>
            <div class="elemento"><?= $objeto->id ?></div>
            <div class="elemento"><?= $objeto->marca ?></div>
            <div class="elemento"><?= $objeto->año ?></div>
            <div class="elemento"><?= $objeto->kilometraje ?></div>
            <div class="elemento"><?= $objeto->combustible ?></div>
            <div class="elemento"><?= $objeto->precio ?></div>
            <div class="elemento">
                <form method="POST" action="formulario.php">
                    <input type="hidden" name="imagen" value="<?php echo $objeto->imagen ?>">
                    <input type="hidden" name="id" value="<?php echo $objeto->id ?>">    
                    <input type="hidden" name="marca" value="<?php echo $objeto->marca ?>">
                    <input type="hidden" name="año" value="<?php echo $objeto->año ?>">
                    <input type="hidden" name="kilometraje" value="<?php echo $objeto->kilometraje ?>">
                    <select style="visibility:hidden"name="combustible"  value="<?php echo $coche->combustible; ?>">
                    </select> 
                    <input type="hidden" name="precio" value="<?php echo $objeto->precio ?>">
                    <input  class="boton" type="submit" name="actualizar" value="Actualizar">
                    <button   class="boton" type="button" name="eliminar" id="eliminar" onclick="botonEliminar('<?php echo $objeto->id ?>','<?php echo $objeto->marca ?>','<?php echo $objeto->año ?>','<?php echo $objeto->imagen ?>')">Eliminar</button>
                </form>
            </div>   
            <?php }  ?>
        </div>
    <?php include_once "ficheros/compartidos/ventana.php"?>    
    <?php include_once "ficheros/compartidos/pie.php"?>
</body>
</html>

