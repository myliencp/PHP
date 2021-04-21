<link rel="stylesheet" href="./formularios/login.css">
<script defer src="./formularios/registro.js" ></script>

<div id="registro" class="registro">
    <div class="cuadro" id="cuadroR">
        <div class="titulos">
           <span class="sesion">Regístrate</span>
           <span class="close" id="close" onclick="ventanaRegistro.style.display='none';">&times;</span>
        </div>
    <?php
        $mensaje = "";
        $nombre = "";
        $apellidos = "";
        $correo = "";  
        $contraseña = "";
        $confirmaContraseña = "";

    $hash = md5(rand(0,1000));
    // echo $hash;
    ?>  
        
        <form id="formularioR" class="formulario" action="../controlador/correo.php" method="POST" autocomplete="off">
            <label for="nombre">Nombre:<input type="text" name="nombre" class="nombre" value="<?=$nombre ?>"></label>
            <br>
            <label for="apellidos">Apellidos:<input type="text" name="apellidos" class="apellidos" value="<?=$apellidos ?>"></label>
            <br>
            <label for="correo">Correo:<input type="email" name="correo" class="correo" value="<?=$correo ?>"></label>
            <br>
            <label for="contraseña">Contraseña:<input type="password" name="contraseña" id="contraseña" class="password2" value="<?=$contraseña ?>"></label>
            <br>
            <label for="confirmaContraseña">Confirma Contraseña:<input type="password" name="confirmaContraseña" id="contraseña1" class="password" value="<?=$confirmaContraseña ?>" onpaste ="return false;"></label>
            <br>
            <!-- <p id="respuesta"><?=$mensaje?></p> -->
            <p id="cartel"></p>                   
            <div id="botones">
                <button type="button" name="aceptarR" id="aceptarR" class="btn" onclick="comprobar()">Aceptar</button>
                <button type="reset" name="cancelar" class="btn2" >Cancelar</button>
            </div>     
            <input type="hidden" name="hash" value="<?=$hash ?>">     
            <p>La contraseña no acepta espacios en blanco y debe tener minimo 6 caracteres</p>
        </form>
        
    </div>
</div>