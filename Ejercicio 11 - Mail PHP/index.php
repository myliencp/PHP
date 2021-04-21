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

// Reglas de envio de correos con HTML
// https://zainex.es/html/codificacion-html-css-email_78

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './phpmailer/Exception.php';
    require './phpmailer/PHPMailer.php';
    require './phpmailer/SMTP.php';
  
//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;  //Enable verbose debug output
    $mail->isSMTP();                        //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;               //Enable SMTP authentication
    $mail->Username   = 'cursodactw2021@gmail.com';       //SMTP username
    $mail->Password   = 'dactw1234';                       //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above



    //Recipients
    $mail->setFrom('cursodactw2021@gmail.com', 'Curso-2021');
    $mail->addAddress('mylien.chac@hotmail.com', 'Myli');     //Add a recipient
    $mail->addAddress('mylien.chac@gmail.com', 'Myli'); 
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );              
    
    //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);       //Establece formato de Email a  HTML
    $mail->CharSet = 'UTF-8';  // Codifica el subject como UTF-8 (acentos eñes)    
    $mail->Subject = 'Verificacion de cuenta';
    $texto="";
    $fp = fopen("Outdoors.html","rb");
    $texto = fread($fp,filesize("Outdoors.html"));    
    $mail->Body    = $texto;
    $mail->AltBody = '';
        
    $mail->send();
    echo 'Mensaje enviado';
    } catch (Exception $e) {
    echo "El mensaje no ha sido enviado, Error: {$mail->ErrorInfo}";
    fclose($fp);
}
?>
</body>
</html>