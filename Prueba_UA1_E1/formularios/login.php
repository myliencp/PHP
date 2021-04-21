<link rel="stylesheet" href="./formularios/login.css">
<script defer src="./formularios/login.js" ></script>

<div id="login" class="login">
    <div class="cuadro">
        <div class="titulos">
           <span class="sesion">Iniciar sesión</span>
           <span class="close" id="close" onclick="ventanaLogin.style.display='none';">&times;</span>
        </div>
    <?php
        $mensaje = "";
        $usuario = "";
        $contraseña = "";
        if (isset($_POST["aceptar"])){
            //Coloco las claves por defecto
             $usuario_correcto = "Myli";
             $contraseña_correcta = "1234";

            //Claves leidas por pantalla
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];

            if ($usuario === $usuario_correcto && $contraseña === $contraseña_correcta){
                session_start();
                $_SESSION["usuario"] = $usuario;
                if (isset($_POST["cookies"])){ //Creamos la cookie
                    setcookie($usuario,$contraseña,time()+(86400*30),"/");
                } else{
                    setcookie($usuario,$contraseña,time()-100,"/");//Borramos la cookie si no tiene checkeado mantener sesion abierta
                }
                header("Location:usuario.php");
            }else{?>
                <script>
                    document.getElementById("login").style.display = "flex";
                </script>
                <?php $mensaje = "El usuario o la contraseña son incorrectas";
            }

        }
        foreach($_COOKIE as $clave => $valor){
            if ($clave != "PHPSESSID"){
                $usuario = $clave;
                $contraseña = $valor;
            }
        }
    ?>
        <form id="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off">
            <label for="usuario">Usuario:<input type="text" name="usuario" class="usuario" value="<?=$usuario ?>"></label>

            <br>
            <label for="contraseña">Contraseña:<input type="password" name="contraseña" class="password" value="<?=$contraseña ?>"></label>
            <br>
            <label for="cookies">Mantener sesión iniciada:<input type="checkbox" id="cookies" name="cookies"></label>            
            <div id="botones">
                <button type="submit" name="aceptar" id="aceptar" class="btn">Aceptar</button>
                <button type="reset" name="cancelar" id="btn2" >Cancelar</button>
            </div>            
        </form>
        <p id="respuesta"><?=$mensaje?></p>
        <p>¿Olvidaste la contraseña? <u style="color:#f1c40f;">¡Click Aqui!</u></p>
    </div>
</div>