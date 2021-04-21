<?php require_once "../modelo/clases.php"; 
session_start();
$errores= [
    'nombre' => "",
    'apellidos' => "",
    'email' => "",
    'contraseña' => ""
];
// var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>

</head>
<body>
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './phpmailer/Exception.php';
    require './phpmailer/PHPMailer.php';
    require './phpmailer/SMTP.php';

    
    if ($_POST["contraseña"] !=  $_POST["contraseña1"]) {
        $errores['contraseña'] = "las contraseñas no son iguales";
        header("Location: ../index.php");
    }
    $fichero = new ficheroJson("../claves.json");
    $ficha = new usuario($_POST["nombre"],$_POST["apellidos"],$_POST["correo"],$_POST["contraseña"],$_POST["hash"],false);
    if ($ficha->validarusuario($errores)) {
       $fichero->grabaFichero("../claves.json",$ficha);
    } else {
        $_SESSION["alerta"] = "Correo electrónico repetido";
        header("Location: ../index.php");
    }
                
    $usuario = $_POST["nombre"];
    $hash = $_POST["hash"];    
    $correo = $_POST["correo"];    
    $mensaje = "";
    $pagina = "http://localhost/proyectos/Ejercicio%2010.1%20-%20Login%20-%20Registro/verificar.php?nombre=".$usuario.'&hash='.$hash;

 
    $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();     
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;               
            $mail->Username   = 'cursodactw2021@gmail.com';
            $mail->Password   = 'dactw1234';               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587; 
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );                            


            $mail->setFrom('cursodactw2021@gmail.com', 'Curso 2021');
            $mail->addAddress($correo, $usuario);    
            
            $mail->isHTML(true);       
            $mail->CharSet = 'UTF-8';  
            
            $mail->Subject = 'Verificación de cuenta';
            $mensaje    = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=, initial-scale=1.0">
                <title>Document</title>
                <style>
                .boton {
                    display: block;
                    width: 80px;
                    height: 80px;
                    margin-left:40%;
                    border-radius: 50%;
                    color: green;
                    background-color: rgb(229, 240, 229);
                    border-style: ridge;
                    text-decoration: greenyellow;
                    text-align: center;
                    line-height: 80px;
                }
                
                .boton:hover {
                    color: rgb(88, 109, 87);
                    box-shadow: 0 4px 16px rgb(30, 87, 42);
                    transition: all 0.2s ease;
                }
                body {
                    display: flex;
                    flex-direction: column;
                    justify-content: center; 
                    align-items: center;
                }
            </style>
            </head>
            <body>
                <h1>Bienvenido a nuestro canal</h1>
                <p>Este es el mensaje de confirmación para comprobar que su correo electrónico esta bien escrito</p>
                <p>De ud click en el cuadro de abajo para confirmar su correo electrónico</p>
                <a  class="boton" href="';
            $mensaje = $mensaje.$pagina;
            $mensaje =$mensaje.'">De Click</a>
                <p>Si no ves el botón anterior o no responde, copia y pega el siguiente link en tu navegador de Internet. Asegúrate de copiar todo el texto del enlace:</p>
                <p>IMPORTANTE: Recuerda que la activación implica que aceptas los términos y condiciones del servicio <a href="https://www.aepd.es/es">(leer)</a></p>
            
                
            </body>
            </html>';
            $mail->Body    = $mensaje;
            http://localhost/proyectos/Ejercicio%2010.1%20-%20Login%20-%20Registro/correo.php
            $mail->AltBody = 'Bienvenido a nuestro canal
            Este es el mensaje de confirmación para comprobar que su correo electrónico esta bien escrito
            
            Copia y pega el siguiente link en tu navegador de Internet. Asegúrate de copiar todo el texto del enlace:
            LINK
            IMPORTANTE: Recuerda que la activación implica que aceptas los términos y condiciones del servicio: https://www.aepd.es/es';
            
            $mail->send();
            echo 'Mensaje enviado';
            // header("Location: ../index.php");
            } catch (Exception $e) {
            echo "El mensaje no ha sido enviado, Error: {$mail->ErrorInfo}";
        }
?>
</body>
</html>