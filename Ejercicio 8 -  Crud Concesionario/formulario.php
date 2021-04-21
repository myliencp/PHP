<?php require_once "ficheros/compartidos/coches.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    $listado = new ficheroJson('./ficheros/coches.json','coches');
    $coche = new Coche();
    foreach ($_POST as $clave => $valor ) {
        if (array_key_exists($clave, get_object_vars($coche))) {
            if (is_numeric($valor)) {
                $coche->$clave = intval($valor);
            } else{
                $coche->$clave = $valor;
            }
        }
    }
    if (isset($_POST["aceptar"])) {
        
        $listado->grabaFichero('./ficheros/coches.json','coches',$coche); 
        header('Location: index.php');
    }

?>

<?php include_once "ficheros/compartidos/encabezado.php"?>
<form id= "formulario" name="formulario" method="POST" 
enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div id="cuerpo">
    <div id="datos">
            <label for="id">Identificador</label>
            <?php 
            if (isset($_POST["nuevo"])) {
                $coche->id = $listado->nuevoRegistro();
                $coche->imagen = "notiene.jpg";
            }
            ?>
            <input type="text" value="<?php echo $coche->id ?>" disabled>
            <input type="hidden" name="id" value="<?php echo $coche->id ?>">
            <label for="marca">Marca:</label>
            <input type="text" name="marca" value="<?php echo $coche->marca; ?>">
            <label for="año">Año:</label>
            <input type="number" name="año" value="<?php echo $coche->año; ?>">
            <label for="kilometraje">Kilometraje:</label>
            <input type="number" name="kilometraje" value="<?php echo $coche->kilometraje; ?>">
            <label for="combustible">Combustible:</label>
            <select name="combustible" value="<?php echo $coche->combustible; ?>">
                <option value="1">Gasolina</option>
                <option value="2">Diesel</option>
                <option value="3">Eléctrico</option>
                <option value="4">Híbrido</option>
            </select> 
            <!-- <input type="text" name="combustible" value="<?php echo $coche->combustible; ?>"> -->
            <label for="number">Precio:</label>
            <input type="text" name="precio" value="<?php echo $coche->precio; ?>">
            <div id="botones">
                <input type="submit" name="aceptar" value="Aceptar">
                <input type="reset" name="cancelar" value="Cancelar">                
            </div>
            <input type="hidden" id="imagen" name="imagen" value="<?php echo $coche->imagen; ?>">
            
    </div>
    <div id="seccionFoto">
        <img id="foto" src="<?php echo 'ficheros/imagenes/'.$coche->imagen; ?>" alt="Foto del coche" >
        <input type="file"  id="imagen_fichero" name="imagen_fichero" accept="image/png , image/jpeg" onchange="cargafoto()">
        <script>
            function cargafoto(){
                document.getElementById('foto').src = 
                window.URL.createObjectURL(document.getElementById("imagen_fichero").files[0]);
                document.getElementById('imagen').value = document.getElementById("imagen_fichero").files[0].name;
            }
        </script>            
    </div>
</div>
</form>
<?php include_once "ficheros/compartidos/pie.php"?>
</body>
</html>