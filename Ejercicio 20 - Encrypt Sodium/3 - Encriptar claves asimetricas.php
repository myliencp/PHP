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
        $keypair = sodium_crypto_kx_keypair();
        $secret = sodium_crypto_kx_secretkey($keypair);
        $public = sodium_crypto_kx_publickey($keypair);
        printf("secret: %s<br><br>public: %s", bin2hex($secret), bin2hex($public));
    ?>
</body>
</html>