<link rel="stylesheet" href="./formularios/login.css">
<div id="login" class="login">
    <div id="cuadro" class="cuadro">
        <form action="login.php">
            <ul class="lista">
                <li class="fila">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario">
                </li>
                <li class="fila">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" name="contraseña">
                </li>
                <li class="botones">
                    <button type="button" name="aceptar">Aceptar</button>
                    <button type="button" name="cancelar"
                    onclick = "ventanaLogin.style.display='none';" >Cancelar            
                </button>
                </li>
            </ul>
        </form>
    </div>
</div>