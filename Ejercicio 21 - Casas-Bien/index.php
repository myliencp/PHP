<?php require_once "ficheros/compartidos/clases.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tucasasivale</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="ficha.js" ></script>

</head>
<body>
    <?php include_once "ficheros/compartidos/encabezado.php"?>
    <div id="cuerpo">
        <div id="datos">
            <h2>Listado de casas</h2>
            <div class="contenedor">            
            <div class="elemento" style="background-color: #A09F9F;">FOTO</div>            
            <div class="elemento" style="background-color: #A09F9F;">DESCRIPCION</div>            
            <div class="elemento" style="background-color: #A09F9F;">PRECIO(€)</div>    
            <div class="elemento" style="background-color: #A09F9F;">FICHA</div>
            <?php            
                $listado = new ficheroJson('ficheros/casas.json','');
                 foreach ($listado->lista as $casa) {
                    
                    $objeto = (object)($casa);?>
                   
                    <div class="elemento">
                    <?php if(isset($objeto->id)) {?>
                        <img class="imagen" src="<?php echo 'ficheros/imagenes/casa'.$objeto->id.'.jpg'?>" >
                    <?php }; ?>
                    </div>            
                    <div class="elemento"><?= $objeto->descripcion ?></div>        
                    <div class="elemento"><?= $objeto->precio ?></div>
                    <div class="elemento">
                        <form method="POST" >
                            <input type="hidden" name="imagen" value="<?php echo 'ficheros/imagenes/casa'.$objeto->id.'.jpg' ?>">
                            <input type="hidden" name="id" value="<?php echo $objeto->id ?>">    
                            <input type="hidden" name="descripcion" value="<?php echo $objeto->descripcion ?>">
                            <input type="hidden" name="año" value="<?php echo $objeto->año ?>">
                            <input type="hidden" name="garaje" value="<?php echo $objeto->garaje ?>">
                            <input type="hidden" name="dormitorios" value="<?php echo $objeto->dormitorios ?>">
                            <input type="hidden" name="baños" value="<?php echo $objeto->baños ?>">
                            <input type="hidden" name="superficie" value="<?php echo $objeto->superficie ?>">
                            <input type="hidden" name="precio" value="<?php echo $objeto->precio ?>">
                            <input class="boton" type="button" name="ver" value="Ver" onclick="muestraFicha(<?php echo $objeto->id ?>,'<?php echo $objeto->descripcion ?>','<?php echo $objeto->año ?>','<?php echo $objeto->garaje ?>','<?php echo $objeto->dormitorios ?>','<?php echo $objeto->baños ?>','<?php echo $objeto->superficie ?>','<?php echo $objeto->precio ?>')">                    
                        </form>
                    
                    </div>
            <?php } ?> 
          
          </div>
        </div>       
        
        <div id="ficha">                   

        <?php require_once "ficha.php"; ?>
        
        </div>
    </div>
    <?php include_once "ficheros/compartidos/pie.php"?>
</body>
</html>

