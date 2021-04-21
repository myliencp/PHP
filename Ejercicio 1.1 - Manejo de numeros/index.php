<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tabla de multiplicar</h1>
<h2>Creación de una tabla de 10x10</h2>
<?php
    echo '<table border=1>';
 
    // Cabecera (1º fila)
    echo '<tr>';
    echo '<td> </td>';
    for ($i=1; $i <= 10; $i++) { 
        echo '<td>';
        echo $i;
        echo '</td>';
    }
     echo '</tr>';
 
    // contenido
 
    //columna vertical
    for ($i=1; $i <= 10; $i++) { 
        echo '<tr>';
        echo '<td>';
        echo $i;
        echo '</td>';
        //calculo tabla multiplicar
        for ($j=1; $j <= 10; $j++) { 
            echo '<td>';
            echo $i * $j;
            echo '</td>';
        }
         echo '</tr>';
    }
     echo '</table>';
?>
</body>
</html>
