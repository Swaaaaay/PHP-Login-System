<?php 
    //allow the config
    define('__CONFIG__', true);
    //require the config
require_once "inc/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" />
</head>
<body>
    
<div class="uk-section uk-container">
    <?php 
        echo "Hello World, Today is:  ";
        echo date("Y m d"); ?>

<p>
    <a href="./login.php">Login</a>
    <a href="./register.php">Register</a>
</p>

</div>







<?php require_once "inc/footer.php"; ?>


    
</body>
</html>