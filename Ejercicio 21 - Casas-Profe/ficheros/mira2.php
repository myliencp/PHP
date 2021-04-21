
<?php

    /* ENCUENTRO EL DIRECTORIO */

    $directorio = getcwd();
    /* tener en cuenta que aunque la carpeta img y el file esten juntos, yo en index hago un include
    lo que significa que al incluirse estare dos carpetas mas arriba de mi objetivo */ 
    chdir($directorio."./ficheros/imagenes");
    // vector que me devuelve el scandir
    $ficheros = scandir($directorio."./ficheros/imagenes");
    //print_r($ficheros);

    $archivos = $directorios = array();
    // el verctor ficheros esta formado por elementos: lo recorro 
    foreach ($ficheros as $elemento) {
        //filtro 
        if ( $elemento != "." && $elemento != "..") {
            if(is_dir($elemento)) {
                //los array push me permiten 
                array_push($directorios,$elemento);
                //echo $elemento.'<br>';
            }
        }
    };
    //print_r($ficheros);
    // de este array que imprimo se que hombre y mujer son los index 3 y 4

?>

