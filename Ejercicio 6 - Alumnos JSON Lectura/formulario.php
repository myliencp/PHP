<?php require_once "ficheros/compartidos/clases.php"; 
$errores=[ //Para validar los campos del formulario
    'nombre' => "",
    'apellidos' => "",
    'telefono' => "",
    'email' => "",
    'web' => ""
]?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <link rel="stylesheet" href="style.css">
    <title>Listado de Alumnos</title>
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
    //Grabamos los datos del formulario
    if (isset($_POST["aceptar"])) {
        if ($alumno->validarAlumno($errores)){
        $listado->grabaFichero('./ficheros/alumnos.json','alumnos',$alumno); 
        header('Location: index.php');
        }
    }

?>

<?php include_once "ficheros/compartidos/encabezado.php"?>
<form id= "formulario" name="formulario" method="POST" 
enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div id="cuerpo">
    <div id="datos">
            <label for="id">Identificador:</label>
            <?php 
            if (isset($_POST["nuevo"])) {
                $alumno->id = $listado->nuevoAlumno();
                $alumno->imagen = "notiene.gif";
            }
            ?>
            <input type="text" value="<?php echo $alumno->id ?>" disabled>
            <input type="hidden" name="id" value="<?php echo $alumno->id ?>">
            <div id="alumnoNombre">
                <div class="enlinea">
                    <label for="nombre">Nombre:</label>
                    <label class="form_etiqueta form_errores"><?php echo $errores['nombre'];?></label>
                </div>
                <input type="text" name="nombre" value="<?php echo $alumno->nombre; ?>">
            </div> 
            <div id="alumnoApellidos">
                <div class="enlinea">
                    <label for="apellidos">Apellidos:</label>
                    <label class="form_etiqueta form_errores"><?php echo $errores['apellidos'];?></label>
                </div>
                <input type="text" name="apellidos" value="<?php echo $alumno->apellidos; ?>">
            </div> 
            <div id="alumnoEmail">
                <div class="enlinea">
                    <label for="email">Email:</label>
                    <label class="form_etiqueta form_errores"><?php echo $errores['email'];?></label>
                </div>
                <input type="email" name="email" value="<?php echo $alumno->email; ?>">
            </div>           
            <div id="alumnoTelefono">
                <div class="enlinea">
                    <label for="telefono">Telefono</label>
                    <label class="form_etiqueta form_errores"><?php echo $errores['telefono'];?></label>  
                </div>
                <input type="tel" name="telefono"  placeholder="999-999-999" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}"value="<?php echo $alumno->telefono ?>">           
              
            </div>
            <div id="alumnoWeb">
                <div class="enlinea">
                <label for="web">WEB</label>
                    <label class="form_etiqueta form_errores"><?php echo $errores['web'];?></label>  
                </div>
                <input type="url" name="web" placeholder="¿Tienes una página web?" value="<?php echo $alumno->web ?>">          
            </div>    
            <div id="botones">
                <input type="submit" name="aceptar" value="Aceptar">
                <input type="reset" name="cancelar" value="Cancelar">                
            </div>
            <input type="hidden" id="imagen" name="imagen" value="<?php echo $alumno->imagen; ?>">
    </div>
    <div id="seccionFoto">
        <img id="foto" src="<?php echo 'ficheros/imagenes/'.$alumno->imagen; ?>" alt="Foto del alumno" >
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