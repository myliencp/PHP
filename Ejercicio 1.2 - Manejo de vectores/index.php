<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mi primer vector (ya con problemas)</h1>
    <?php
    $array = array(
        1    => "a",
        "1"  => "b",
        1.5  => "c",
        true => "d",
    );
    var_dump($array);// var_dump Vuelca el contenido de la variable
    ?> <h2>Solo queda uno de los 4 que se cargaron</h2> <?php
    ?> <h1>Mi segundo vector</h1> <?php
    $array1 = array("Buenos", "días", "Como", "estan?");
    var_dump($array1);
?>
</body>
</html>