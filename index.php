<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<script src="./dist/bundle.js"></script>
</body>
</html>
<?php

require './vendor/autoload.php';

use Mate\Int\Products;


$productos = Products::show_products();

dump($productos);
?>