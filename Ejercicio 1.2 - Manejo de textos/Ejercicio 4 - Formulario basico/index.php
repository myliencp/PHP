<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejemplo.php" method="post">
        <p>Nombre: <input type="text" name="nombre"></p>
        <p>Apellidos: <input type="text" name="apellidos"></p>
        <p>Fecha de Nacimiento: <input type="date" name="fechaNac"></p>
        <input type="radio" id="hombre" name="sexo" value="0" checked>
        <label for="hombre">Hombre</label><br>
        <input type="radio" id="mujer" name="sexo" value="1">
        <label for="female">Mujer</label><br>
        <select name="isla">
            <?php
            $islas = array("Tenerife", "Gran Canaria", "Lanzarote", "Fuerteventura","La Gomera","El Hierro","La Palma","La Graciosa");
            for ($i=0; $i <count($islas) ; $i++) {
                echo '<option value="'.$i.'" >'.$islas[$i].'</option>';
            }
            ?>
        </select>
        <p><input type="submit" value="Enviar"></p>
    </form>
</body>
</html>