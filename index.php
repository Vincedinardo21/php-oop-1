<?php
include __DIR__ . "/Movie.php";

$rambo = new Movie("Rambo", "Azione", 1982, 93, "ENG", 14);
$arancia = new Movie("Arancia Meccanica", "Drammatico", 1971, 136, "ENG", 18);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>  
    <h3><?php echo $rambo->nome ?></h3>
    <div><?php echo $rambo->genere ?></div>
    <div><?php echo $rambo->anno ?></div>
    <div><?php echo $rambo->durata ?></div>
    <div><?php echo $rambo->lingua ?></div>
    <div><?php echo $rambo->limite_eta ?></div>
    <h4><?php echo $rambo->warning ?></h4>

    <h3><?php echo $arancia->nome ?></h3>
    <div><?php echo $arancia->genere ?></div>
    <div><?php echo $arancia->anno ?></div>
    <div><?php echo $arancia->durata ?></div>
    <div><?php echo $arancia->lingua ?></div>
    <div><?php echo $arancia->limite_eta ?></div>
    <h4><?php echo $arancia->warning ?></h4>
</body>
</html>