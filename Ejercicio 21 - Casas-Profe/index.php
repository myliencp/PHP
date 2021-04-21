<?php
    require_once "./modelo/clases.php"; 
    $imagen = "";
    $limiteInferior = 1;
    $limiteSuperior = 5;

     if (isset($_POST['seleccion']) || isset($_POST['slider'])) {
            var_dump($_POST);
            if  (isset($_POST['seleccion'])) { 
                $imagen = $_POST['seleccion'];
            };
            if  (isset($_POST['slider'])) { 
                $limiteSuperior = ($_POST["slider"]+1)*5;
                $limiteInferior = $limiteSuperior-4;
            };    
            // Aqui toca hacer la busqueda en el vector        
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pantalla principal </title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header>
        <?php include_once "ficheros/encabezado.php" ?>
    </header>
    
    <h1> Sobre nosotros </h1>
    <p id="justificado"> 
        Las propiedades de nuestra lista son de clientes extranjeros que desean mantenerse en el anonimato y necesitan transacciones rápidas y transparentes. Nuestra financiera permite calcular las hipotecas hasta un máximo de 25 años por el 80%  del total de la venta.
    </p>

    <h3> ¿Cómo conseguir la casa de tus sueños? </h3>

    <div id=cuerpo >

            <div id="boxmira1">
                <h5> MIRA </h5>
                <p class="pstyle"> ¡A continuación puedes acceder a nuestras ofertas de la semana! </p>

   
            <div id="cuerpo">
                <div id="lista">
                   <form method="POST" id="formulario" name="formulario" action="index.php">               
                   <div class="contenedor">
                        <div class="elemento">Selector</div>
                        <div class="elemento">Imagen</div>
                        <div class="elemento">Descripcion</div>
                        <div class="elemento">Precio</div>
                        <?php
                            $listado = new ficheroJson('casas.json');
                            $contador = 1;
                            foreach ($listado->lista as $casa) {
                                if ($contador >= $limiteInferior && $contador < $limiteSuperior) {
                                $objeto = (object)($casa);?>
                                <div class="elemento">
                                    <input type="radio" name="seleccion" value="<?= $objeto->id?>" onclick="document.getElementById('formulario').submit()">
                                </div>
                                <div class="elemento">
                                        <img class="imagen" src="<?php echo './imagenes/casa'.$objeto->id.'.jpg'?>" >
                                </div>
                                <div class="elemento"><?= $objeto->descripcion ?></div>
                                <div class="elemento"><?= $objeto->precio ?></div>
                            <?php }
                            $contador++;
                            }; ?>
                    </div>
                    <?php if(isset($_POST["slider"])) {?>
                        <input type="range" min="0" max="3" value="<?= $_POST['slider'] ?>" name="slider" onchange="document.getElementById('formulario').submit()">
                    <?php } else {?>
                        <input type="range" min="0" max="3" value="0" name="slider" onchange="document.getElementById('formulario').submit()">
                    <?php } ?>
                    
                   </form>
                </div>
                <div id="ficha">
                    <?php if ($imagen !='') {?>
                        <img class="imagen1" src="<?= './imagenes/casa'.$imagen.'.jpg'?>" >          
                    <?php }?>
                </div>
            </div>
    <footer>
        <?php include_once "ficheros/pie.php" ?>
    </footer>

</body>

</html>