<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="lista" id="lista">
    <?php
        $ficheros1  = scandir(getcwd());
        for ($i=0; $i < count($ficheros1) ; $i++) {
            echo '<option value="'.$ficheros1[$i].'">'.$ficheros1[$i].'</option>';
        }    
    ?>
    </select>
</body>
</html>