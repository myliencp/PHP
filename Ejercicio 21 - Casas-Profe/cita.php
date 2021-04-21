<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Reservar cita </title>
    <link rel="stylesheet" href="style_completo.css">
    <!-- Link to font awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>

    <header>
        <!-- incluyo el encabezado, que sera igual para todas las pag webs (encabezado comun) -->
        <?php include_once "ficheros/encabezado.php" ?>
    </header>

    <div id="cuerpo">
        <article>
            <h1> Formulario Cita Previa  </h1>
            <form id="formNewAlu" name="formulario" method="GET" action="accion_cita.php">
                Nombre(*):    <input type="text" name="txtNombre"	 id="txt1" /> <br> <br>
                Apellidos(*): <input type="text" name="txtApellidos" id="txt2" /> <br> <br>
                Edad:		  <input type="text" name="txtEdad"		 id="txt3" size="3" maxlength="2" /><p/>

                Sexo: 
                <input type="radio" name="radSex" value="Hombre" /> Hombre
                <input type="radio" name="radSex" value="Mujer" /> Mujer <p/>
                           
                Dirección: <input type="text" name="txtDire" id="txt4" /> <br> <br>
                Teléfono: <input type="number" name="nbrTel" id="txt5" />  <br> <br>
                Correo electrónico: <input type="email" name="emlCorreo" id="txt4" /> <br> <br>

                <input type="reset" value="Borrar" >
                <input type="submit" name="btnEnviar" value="Enviar Formulario"/>
            </form>
        </article>

        <aside>
            <div class="contacta"> 
                <div>
                    <h3 class="contact"><i class="far fa-envelope"></i>
                    Email</h3>
                    <p><a href="https://www.gmail.com" target="_blank" style="color:white;"> alconcar@gmail.com </a></p>
                    <br> <br>
                </div>
                <div>
                    <h3 class="contact"><i class="fas fa-phone"></i>
                    Tel. </h3>
                    <p> (000) 000-0000 12387 </p>
                    <br> <br>
                </div>
                <div>
                    <h3 class="contact"><i class="fas fa-home"></i>
                    Dirección </h3>
                    <p>1234 Autopista sur<br />
                    Tenerife, TN 00000<br />
                    España </p>
                    <br> <br>
                </div>
            </div>
        </aside>


    </div>

    <footer>
        <?php include_once "ficheros/pie.php" ?>
    </footer>


</body>

</html>