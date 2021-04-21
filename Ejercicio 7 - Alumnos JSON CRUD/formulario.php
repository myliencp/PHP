<?php require_once "ficheros/compartidos/clases.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Document</title>
</head>
<body>
<?php
    $listado = new ficheroJson('./ficheros/alumnos.json','alumnos');
    $alumno = new Alumno();
    foreach ($_POST as $clave => $valor ) {
        if (array_key_exists($clave, get_object_vars($alumno))) {
            if (is_numeric($valor)) {
                $alumno->$clave = intval($valor);
            } else{
                $alumno->$clave = $valor;
            }
        }
    }
    if (isset($_POST["aceptar"])) {
        $listado->grabaFichero('./ficheros/alumnos.json','alumnos',$alumno); 
        header('Location: index.php');
    }

?>

<?php include_once "ficheros/compartidos/encabezado.php"?>
<form id= "formulario" name="formulario" method="POST" 
enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div id="cuerpo">
    <div id="datos">
           
            <?php 
                if (isset($_POST["nuevo"])) {
                    $alumno->id = $listado->nuevoAlumno();
                    $alumno->imagen = "notiene.jpg";
                }
            ?>
            <input type="hidden" name="id" value="<?php echo $alumno->id ?>">
            
            <div id="alumnoId">
                <label for="id">Identificador</label>
                <input type="text" value="<?php 
                echo $alumno->id ?>" disabled>
            </div>
            <div id="alumnoNombre">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $alumno->nombre; ?>">
            </div>
            <div id="alumnoApellidos">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" value="<?php echo $alumno->apellidos; ?>">
            </div>
            <div id="alumnoEmail">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $alumno->email; ?>">
            </div>
            <div id="alumnoTelefono">
                <label for="telefono">Telefono</label>
                <input type="tel" name="telefono" pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="999-99-99-99"value="<?php echo $alumno->telefono ?>">            
            </div>
            <div id="alumnoWeb">
                <label for="web">WEB</label>
                <input type="url" name="web" placeholder="¿Tienes un sitio web?" value="<?php echo $alumno->web ?>">            
            
            </div>    
            <input type="hidden" id="imagen" name="imagen" value="<?php echo $alumno->imagen ?>">
            <div id="botones">
                <input type="submit" name="aceptar" value="Aceptar">
                <input type="reset" name="cancelar" value="Cancelar">
            </div>
            
    </div>
    <div id="seccionFoto">
        <div class="marco">
            <img id="foto" src="<?php echo 'ficheros/imagenes/'.$alumno->imagen; ?>" alt="Foto del alumno">
        </div>   
        <label class="ficheroFoto">
            <input type="file"  id="imagen_fichero" name="imagen_fichero" accept="image/png , image/jpeg" onchange="cargafoto()">
            Seleccione Foto
            </label> 
        <label id="nombre_foto"><?php echo $alumno->imagen;?></label>
        <script>
            function cargafoto(){
                document.getElementById('foto').src = 
                window.URL.createObjectURL(document.getElementById("imagen_fichero").files[0]);
                document.getElementById('imagen').value = 
                document.getElementById('nombre_foto').innerHTML = 
                document.getElementById("imagen_fichero").files[0].name;
            }
        </script>            
    </div>
</div>
</form>
<?php include_once "ficheros/compartidos/pie.php"?>
</body>
</html>