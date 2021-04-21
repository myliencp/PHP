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
$p12cert = array();
$file = 'ciudadano.pfx';
$pass = "123456";
$fd = fopen($file, 'r');
$p12buf = fread($fd, filesize($file));
fclose($fd);
echo "<h1>Mi Primer Test</h1>";
if ( openssl_pkcs12_read($p12buf, $p12cert, $pass) )
{
   echo "Funciona<br>";
  

}
else
{
    echo "No funciona";
}

$privatekey = $p12cert["pkey"];
$res=openssl_pkey_new();
openssl_pkey_export($res, $p12cert["pkey"]);

$publickey=openssl_pkey_get_details($res);
// var_dump($publickey);
$publickey=$publickey["key"];

echo "<h2>Private Key:</h2>$privatekey<br><h2>Public Key:</h2>$publickey<BR>";

$cleartext = htmlentities('<center><b>Texto HTML</b></center>');

echo "<h2>Original:</h2>$cleartext<BR><BR>";

openssl_public_encrypt($cleartext, $crypttext, $publickey);

echo "<h2>Encriptada:</h2>$crypttext<BR><BR>";

$PK2=openssl_get_privatekey($p12cert["pkey"]);

$Crypted=openssl_private_decrypt($crypttext,$Decrypted,$PK2);
if (!$Crypted) {
   $MSG.="<p class='error'>Imposible desencriptar ($CCID).</p>";
}else{
   echo "<h2>Desencriptada:</h2>" . $Decrypted;
}
?>
</body>
</html>