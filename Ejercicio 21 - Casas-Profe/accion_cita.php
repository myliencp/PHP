<?php

    // Arrays para guardar mensajes y errores:
	$aErrores = array();
	$aMensajes = array();

    // Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
	$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/";

	// Comprobar si se ha enviado el formulario:
	if( !empty($_GET) )
	{

		echo "FORMULARIO RECIBIDO:<br/>";
		echo "====================<p/>";

        // Mostrar la información recibida del formulario:
        echo "Usted envio los siguientes datos:<br/>";
		var_dump( $_GET );
		echo "<hr/>";

		// Comprobar si llegaron los campos requeridos:
		if( isset($_GET['txtNombre']) && isset($_GET['txtApellidos']) )
		{
			
			// Nombre:
			if( empty($_GET['txtNombre']) )
				$aErrores[] = "Debe especificar el nombre";
			else
			{
				// Comprobar mediante una expresión regular, que solo contiene letras y espacios:
				if( preg_match($patron_texto, $_GET['txtNombre']) )
					$aMensajes[] = "Nombre: [".$_GET['txtNombre']."]";
				else
					$aErrores[] = "El nombre sólo puede contener letras y espacios";
			}

			// Apellidos:
			if( empty($_GET['txtApellidos']) )
				$aErrores[] = "Debe especificar los apellidos";
			else
			{
				// Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
				if( preg_match($patron_texto, $_GET['txtApellidos']) )
					$aMensajes[] = "Apellidos: [".$_GET['txtApellidos']."]";
				else
					$aErrores[] = "Los apellidos sólo pueden contener letras y espacios";
			}

			// Edad:
			if( (isset($_GET['txtEdad']) ) && (!empty($_GET['txtEdad'])) )
			{
				if( is_numeric($_GET['txtEdad']) )
					$aMensajes[] ="Edad: [".$_GET['txtEdad']."]";
				else
					$aErrores[] = "El campo edad debe contener un número.";
			}

		}
		else
		{
			echo "<p>No se han especificado todos los datos requeridos.</p>";
		}


		// Si han habido errores se muestran, sino se mostr�n los mensajes
		if( count($aErrores) > 0 )
		{
			echo "<p>ERRORES ENCONTRADOS:</p>";

			// Mostrar los errores:
			for( $contador=0; $contador < count($aErrores); $contador++ ) 
				echo $aErrores[$contador]."<br/>";
		}
		else
		{
			// Mostrar los mensajes:
			for( $contador=0; $contador < count($aMensajes); $contador++ ) 
				echo $aMensajes[$contador]."<br/>";
		}

	}
	else
	{
		echo "<p>No se ha enviado el formulario.</p>";
	}

	echo "<p><a href='cita.php'> Haz click aquí para volver al formulario </a></p>";

?>