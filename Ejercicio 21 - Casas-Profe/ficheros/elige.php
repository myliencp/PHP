<?php
    $respuesta = 0;

    if(isset($_POST['submit']))
    {                             //Validacion de envio de formulario
        if(!empty($_POST['servicio']))
        {
            // Ciclo para mostrar las casillas checked checkbox.
            foreach($_POST['servicio'] as $selected)
            {            
                $respuesta = $respuesta + (int)$selected;
            }
        }
    }
?>
