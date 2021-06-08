<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="login1.css?<?=filemtime("login1.css")?>" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
<section>
<?php

session_start();
echo $_SESSION['users'];
?>
    <h1 class="success">success login</h1>
    </section>
</body>
</html>