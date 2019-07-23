<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables et cookies</title>
</head>
<body>
    <?php
        echo '<p><b>Ton adresse IP est:</b> ' . $_SERVER['REMOTE_ADDR'] . '</p>' .
            '<p><b>Ton User Agent est:</b> ' . $_SERVER['HTTP_USER_AGENT']  . '</p>' .
            '<p><b>Ton nom de serveur est:</b> ' . $_SERVER['SERVER_NAME'] . '</p>';
    ?>
</body>
</html>