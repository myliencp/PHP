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
    $msg = 'This is a super secret message!';

    // Generating an encryption key and a nonce
    $key   = random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES); // 256 bit
    $nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES); // 24 bytes
    
    
    echo $msg;
    echo "<br>";
    echo $key;
    echo "<br>";
    echo $nonce;
    echo "<br>";
    // Encrypt
    $ciphertext = sodium_crypto_secretbox($msg, $nonce, $key);
    echo "Texto encriptado:$ciphertext";
    echo "<br>";
    // Decrypt
    $plaintext = sodium_crypto_secretbox_open($ciphertext, $nonce, $key);
    echo "Texto desencriptado:$plaintext";
    echo "<br>";

    echo $plaintext === $msg ? 'Success' : 'Error';
    ?>


</body>
</html>