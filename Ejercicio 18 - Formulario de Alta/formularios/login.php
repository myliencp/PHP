<link rel="stylesheet" href="./formularios/login.css">
<script defer src="./formularios/login.js" ></script>
<div id="login" class="login">
    <div id="cuadro" class="cuadro">
    <div class="titulos">
        <span class="ingreso">Formulario de Alta en el Sistema</span>
        <span class="close" id="close" onclick = "ventanaLogin.style.display='none';">&times;</span>
    </div>
    <?php
    // Instalar extension en Brave edit this cookie

    // Que son las cookies y sesiones
    // https://programacionymas.com/blog/cookies-y-sesiones
    // Crear lista de usuarios cuando se use base de datos

    // Como Implementar verificación de Email
    // https://code.tutsplus.com/es/tutorials/how-to-implement-email-verification-for-new-members--net-3824

    $mensaje = "";
    $usuario = "";
    $nombre = "";
    $apellidos = "";
    $contraseña = "";
    $contraseña1 = "";
    $correo = "";
    $datosUsuarios = [];
    
    if (isset($_POST["aceptar"])) {
           
            $usuario_correcto = "dardo";
            $contraseña_correcta = "1234";
           
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];
            
           
            if ($usuario === $usuario_correcto && $contraseña === $contraseña_correcta) {
                $_SESSION["usuario"] = $usuario;
                if (isset($_POST['cookies'])) {
                    setcookie($usuario,$contraseña, time() + (86400 * 30), "/");
                };
                header("Location: secreta.php");
            } else { ?>
                <script>
                    document.getElementById('login').style.display='flex';
                </script>
                <?php $mensaje = "El usuario o la contraseña son incorrectos";
            }
        }?>
        <?php
        // var_dump($_COOKIE);
        foreach($_COOKIE as $clave => $valor) {
            if ($clave != "PHPSESSID") {
                array_push($datosUsuarios,$clave);
                $usuario = $clave;
                $contraseña = $valor;
            }
        };
        $hash = md5(rand(0,1000));
        ?>
        <form id="formularioRegistro" action="./controlador/correo.php" method="post">
        <!-- autocomplete="off" -->
            <ul class="lista">
                <li class="fila">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" value= "<?= $nombre ?>">
                </li>
                <li class="fila">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" name="apellidos" value= "<?= $apellidos ?>">
                </li>
                <li class="fila">
                    <label for="usuario">Correo:</label>
                    <input type="email" name="correo" value= "<?= $correo ?>">
                </li>
                <li class="fila">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" id="contraseña" name="contraseña" value= "<?= $contraseña ?>">
                </li>
                <li class="fila">
                    <label for="contraseña">Conf.Contraseña:</label>
                    <input type="password" id="contraseña1" name="contraseña1" value= "<?= $contraseña1 ?>" >
                    <!-- onpaste="return false;" -->
                </li>
                <li class="fila">
                    <p id="respuesta"><?= $mensaje ?></p>  
                </li>
                <p id="cartel"></p>
                <li class="botones">
                    <button type="button" name="aceptar" onclick="comprobar()">Aceptar</button>
                    <button type="reset" name="cancelar"
                    >Cancelar</button> 
                </li>
                <input type="hidden" name="hash" value= "<?= $hash ?>">
                <li class="fila">
                    <p>La contraseña no acepta espacios en blanco minimo 6 caracteres</p>
                </li>
            </ul>
        </form>
    </div>
</div>