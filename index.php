<?php
include __DIR__ . "/Movie.php";

$rambo = new Movie("Rambo", "Azione", 1982, 93, "ENG", 14);
$arancia = new Movie("Arancia Meccanica", "Drammatico", 1971, 136, "ENG", 18);

$rambo->setAge();
$arancia->setAge();

var_dump($rambo);
var_dump($arancia);
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>  
    
</body>
</html> -->