<link rel="stylesheet" href="./formularios/login.css">
<script defer src="./formularios/login.js" ></script>

<div id="login" class="login">
    <div class="cuadro">
        <div class="titulos">                
            <span class="close" id="close" onclick="ventanaLogin.style.display='none';">&times;</span>
        </div>   

    <?php
        $usuario = "";
        $mensaje = "";
        $email = "";
        $contraseña = "";
        if (isset($_POST["aceptar"])){
            //Coloco las claves por defecto
             $email_correcto = "mylien.chac@gmail.com";
             $contraseña_correcta = "1234";
             $usuario_correcto = "Mylien";

            //Claves leidas por pantalla
            $email = $_POST["email"];
            $contraseña = $_POST["contraseña"];

            if ($email === $email_correcto && $contraseña === $contraseña_correcta){
                session_start();
                $_SESSION["email"] = $email;
                if (isset($_POST["cookies"])){ //Creamos la cookie
                    setcookie($email,$contraseña,time()+(86400*30),"/");
                } else{
                    setcookie($email,$contraseña,time()-100,"/");//Borramos la cookie si no tiene checkeado mantener sesion abierta
                }
                header("Location:usuario.php");
            }else{?>
                <script>
                    document.getElementById("login").style.display = "flex";
                </script>
                <?php $mensaje = "El email o la contraseña son incorrectas";
            }

        }
        foreach($_COOKIE as $clave => $valor){
            if ($clave != "PHPSESSID"){
                $email = $clave;
                $contraseña = $valor;
            }
        }
    ?>
        <form id="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off">
             
            <h2 class="sesion">Iniciar sesión</h2>
            <input type="hidden" name="usuario">         
            <input type="email" placeholder="&#128231;Email" name="email" class="email" value="<?= str_replace("_",".",$email) ?>">
            <input type="password" placeholder="&#128272;Contraseña"name="contraseña" class="password" value="<?=$contraseña ?>"></label>
            <br>
            <label for="cookies">Mantener sesión iniciada:<input type="checkbox" id="cookies" name="cookies"></label>            
            <div id="botones">
                <button type="submit" name="aceptar" id="aceptar" class="btn">Ingresar</button>
            </div>            
        </form>
        <p id="respuesta"><?=$mensaje?></p>
        <p>¿Olvidaste la contraseña? <u style="color:#f1c40f;">¡Click Aqui!</u></p>
    </div>
</div>