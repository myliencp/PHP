<?php require_once "modelo/clases.php"; ?>
<?php
if (isset($_GET)) {
    $fichero = new ficheroJson("claves.json");
    if ($fichero->verifico($_GET["nombre"],$_GET["hash"])) {
        ?>
        <h1>Bienvenido a nuestra página de verificación de mail</h1>
        <h2>El usuario : <?= $_GET["nombre"] ?> ha sido verificado</h2>
        <p>Ya puede ud ingresar como usuario verificado:<a href="index.php">Ingrese al sistema</a></p>
    <?php } else {?>
        <h1>El usuario : <?= $_GET["nombre"] ?> no ha sido verificado</h1>
        <p>Visite nuestra página WEB para darse nuevamente de alta:<a href="index.php">Ingrese al sistema</a></p>
    <?php }
} ?>