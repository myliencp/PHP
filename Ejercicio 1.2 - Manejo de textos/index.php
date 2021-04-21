<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hola Mundo <br>";
        echo "invertir texto : <br>";
        echo strrev("Hola Mundo"); 
        echo "<br><br>";

        $dato1 = "Texto de prueba1";
        echo $dato1."<br>";
        $dato2 = "Texto de Prueba2";
        echo $dato2."<br>";
        echo "Comparacion entre textos :<br>";
        if (strcmp($dato1, $dato2) != 0) {
            echo "Estas variables no son iguales \n";
        } else {
            echo "Estas variables son iguales \n";
        }
        echo "<br><br>";

        $email  = 'administracion@tenerifesystem.com';
        $domain = strstr($email, '@');
        echo $domain; 

        for ($i = 1, $j = 0; $i <= 10; $j += $i, print $j."-".$i."/",$i++);

        $array = array(1, 2, 3, 4);
        foreach ($array as &$valor) {
            $valor = $valor * 2;
            echo "Respuesta:$valor<br>";
        }

        //Manejo de vector declarativo
        $a = array(
            "uno" => 1,
            "dos" => 2,
            "tres" => 3,
            "diecisiete" => 17
        );
        echo "<br><br>";
        foreach ($a as $k => $v) {
            echo "\$a[$k] => $v.<br>";
        }

        echo "<br><br>";
        echo "Factorial de 4 : ";
        echo factorial(4);

        function factorial($a)
        {
            if ($a >= 2) {
                return $a * factorial($a - 1);
            } else {
                return true;
            }
        }
    
        echo "<br><br>";
        echo substr("0123456789", -3, 2);
        
        echo "<br><br>";
        $text = "The quick brown fox jumped over the lazy dog.";
        $newtext = wordwrap($text, 20, "<br />\n");

        echo $newtext;

        function impar($var)
        {
            // Retorna siempre que el número entero sea impar
            return $var & 1;
        }
        function par($var)
        {
            // Retorna siempre que el número entero sea par
            if ($var%2 ==0 ){
                return true;
            } else {
                return false;
            }
               
        }

        echo "<br><br>";
        $array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
        $array2 = [6, 7, 8, 9, 10, 11, 12];
        echo "Impar :\n";
        print_r(array_filter($array1, "impar"));
        echo "<br><br>";
        echo "Par:\n";
        print_r(array_filter($array2, "par"));

        echo "<br><br>";
        echo getcwd() . "\n";
        
        echo "<br><br>";
        $ficheros1  = scandir(getcwd());
        print_r($ficheros1);
    ?>
</body>
</html>