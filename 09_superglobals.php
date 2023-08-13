<?php
//super globals are built in var that are always available in all scopes

// $_GET - contains information about variables passed through a both URL or a form.
// $_POST - contains information about variables passed through only a form.
// $_COOKIE -  passed through cookie. access various user data.
// $_ENV - contains information about environment var
// $_FILES - contains information about files uploaded to the script
// $_SESSION$- about variables passed through a session
// $_SERVER - about the server environment
// $_REQUEST -information about variables passed through the form or url.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li>Document Root:<?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
        <li>Server Name:<?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
        <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
        <li>Request URI <?php echo $_SERVER['REQUEST_URI']; ?></li>
        <li>Server Software <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
        <li>Client Info <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
        <li>Remote Address <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        <li>Remote Port <?php echo $_SERVER['REMOTE_PORT']; ?></li>
    </ul>
</body>
</html>






