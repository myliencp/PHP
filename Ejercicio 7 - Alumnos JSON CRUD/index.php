<?php require_once "ficheros/compartidos/clases.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="modal.js" language="Javascript" type="text/javascript"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php include_once "ficheros/compartidos/encabezado.php";

    if (isset($_POST["eliminar"])) {

        // $listado->grabaFichero('./ficheros/alumnos.json','alumnos',$alumno); 
        // header('Location: index.php');
    }

    ?>


    <h2>Listado de alumnos</h2>
    <form method="POST" action="formulario.php">
        <input type="submit" name="nuevo" value="Nuevo Alumno">  
    </form>
    <div class="contenedor">
            <div class="elemento">Imagen</div>
            <div class="elemento">Id</div>
            <div class="elemento">Nombre</div>
            <div class="elemento">Apellidos</div>
            <div class="elemento">Email</div>
            <div class="elemento">Telefono</div>
            <div class="elemento">WEB</div>
            <div class="elemento">Métodos</div>
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
            <div class="elemento">
                <form method="POST" action="formulario.php">
                    <input type="hidden" name="imagen" value="<?php echo $objeto->imagen ?>">
                    <input type="hidden" name="id" value="<?php echo $objeto->id ?>">    
                    <input type="hidden" name="nombre" value="<?php echo $objeto->nombre ?>">
                    <input type="hidden" name="apellidos" value="<?php echo $objeto->apellidos ?>">
                    <input type="hidden" name="email" value="<?php echo $objeto->email ?>">
                    <input type="hidden" name="telefono" value="<?php echo $objeto->telefono ?>">
                    <input type="hidden" name="web" value="<?php echo $objeto->web ?>">
                    <input type="submit" name="ver" value="Ver">
                    <input type="submit" name="actualizar" value="Actualizar">
                    <button type="button" name="eliminar" id="eliminar" >Eliminar</button>
                </form>
            </div>   
            <?php }  ?>
            <div id="miModal" class="modal">
                <div class="flex" id="flex">
                    <div class="contenido-modal">
                        <div class="modal-header flex">
                            <h2>Atención ; Eliminar</h2>
                            <span class="close" id="close">&times;</span>
                        </div>
                        <div class="modal-body flex">
                            <p>Esta seguro que quiere eliminar el alumno <?= $objeto->nombre." ".$objeto->apellidos ?></p>
                        </div>
                        <div class="modal-footer flex">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <input type="submit" name="aceptarEliminar" value="Aceptar">
                                <button id=cancelarEliminar onclick="modal.style.display='none';">Cancelar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php include_once "ficheros/compartidos/pie.php"?>
</body>
</html>

