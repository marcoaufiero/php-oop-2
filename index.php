<?php 

include_once __DIR__ . '/classes/food.php';
include_once __DIR__ . '/classes/accessories.php';
include_once __DIR__ . '/classes/games.php';

$type = [
    'dog' => new category('<i class="fa-solid fa-dog"></i>', 'Cane'),
    'cat' => new category('<i class="fa-solid fa-cat"></i>', 'Gatto'),
    'bird' => new category('<i class="fa-solid fa-dove"></i>', 'Uccello')
];

$products = [
    new food('./assets/img/royal-canin-1.jpg', 'Royal Canin', $type['dog'], 43.99, '950g', 'Prosciutto, riso'),
    new food('./assets/img/almo-nature-1.jpg', 'Almo Nature', $type['dog'], 44.99, '600g', 'Manzo, cereali'),
    new accessories('./assets/img/voliera-ferplast.jpg', 'Voliera Ferplast Bella Casa', $type['bird'], 184.99, 'Legno', 'L 83 x P 67 x H 153 cm'),
    new games('./assets/img/topini-trixie.jpg', 'Topini di Peluche Trixie', $type['cat'], 4.99, 'Morbido con codina in corda', '8,5cm x 10cm')
];

echo '<pre>';
var_dump($products[0]);
echo '</pre>';

echo '<pre>';
var_dump($products[1]);
echo '</pre>';

echo '<pre>';
var_dump($products[2]);
echo '</pre>';

echo '<pre>';
var_dump($products[3]);
echo '</pre>';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/20d85c6a60.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    




</body>
</html>