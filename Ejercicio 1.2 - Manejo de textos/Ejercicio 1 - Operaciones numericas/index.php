<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operaciones con numeros</h1>

    <?php
        // Funcion doble duplica el valor del parametro recibido
        function doble($i)
        {
            return $i*2;
        }
        $b = $a = 5;        /* asignar el valor cinco a la variable $a y $b */
        print "Los valores de las variables  , a vale $a , b vale $b <br><br>";

        $c = $a++;          /* post-incremento, asignar el valor original de $a 
                            (5) a $c */
        print "La variable c  vale $c asignando y luego sumando uno a la variable a = $a<br><br>";

        $e = $d = ++$b;     /* pre-incremento, asignar el valor incrementado de
                            $b (6) a $d y $e */
        print "Las variables e y d valen b=$b preincrementado por lo que b=$b,e=$e, d=$d <br><br>";

        $f = doble($d++);  /* asignar el doble del valor de $d antes
                            del incremento, 2*6 = 12, a $f */
        print "Aplicacion de la funcion doble d=$d,f=$f <br><br>";

        $g = doble(++$e);  /* asignar el doble del valor de $e después
                            del incremento, 2*7 = 14, a $g */
        print "Aplicacion de la funcion doble e=$e,g=$g <br><br>";

        $h = $g += 10;      /* primero, $g es incrementado en 10 y finaliza con el valor 24. El valor de la asignación (24) es asignado después a $h, y $h finaliza también con el  valor 24. */
        print "Aplicacion de += g=$g,h=$h <br><br>";
    ?>
</body>
</html>

