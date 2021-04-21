<?php
$islas = array("Tenerife", "Gran Canaria", "Lanzarote", "Fuerteventura","La Gomera","El Hierro","La Palma","La Graciosa");
print "<pre>"; print_r($_REQUEST); print "</pre>\n";

if ($_REQUEST["nombre"] == "" || $_REQUEST["apellidos"] == "") {
    print "<p>No se ha escrito algun dato</p>";
} else {
    echo "<p>Su nombre es $_REQUEST[nombre] $_REQUEST[apellidos]</p>\n";
    $vive = $islas[$_REQUEST["isla"]];
    echo "<p>Vive en  $vive </p>\n";
    // echo "<p>Su apellido es $_REQUEST[apellidos]</p>\n";
}
?>