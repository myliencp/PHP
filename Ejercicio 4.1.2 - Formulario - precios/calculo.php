<?php
echo "Nombre:";
echo $_GET['nombre'];
echo "<br>Apellido :";
echo $_GET['apellido']."<br>";
$total = $_GET['art1']+$_GET['art2']+$_GET['art3'];
echo  "<strong>El total vale : $total </strong>";
?>