<?php 

include_once __DIR__ . '/classes/food.php';
include_once __DIR__ . '/classes/accessories.php';
include_once __DIR__ . '/classes/games.php';
include_once __DIR__ . '/classes/category.php';

$type = [
    'dog' => new category('<i class="fa-solid fa-dog"></i>', ' Cane'),
    'cat' => new category('<i class="fa-solid fa-cat"></i>', ' Gatto'),
    'bird' => new category('<i class="fa-solid fa-dove"></i>', ' Uccello')
];

$products = [
    new food('./assets/img/royal-canin-1.jpg', 'Royal Canin', $type['dog'], 43.99, '950g', 'Prosciutto, riso'),
    new food('./assets/img/almo-nature-1.jpg', 'Almo Nature', $type['dog'], 44.99, '600g', 'Manzo, cereali'),
    new accessories('./assets/img/voliera-ferplast.jpg', 'Voliera Ferplast Bella Casa', $type['bird'], 184.99, 'Legno', 'L 83 x P 67 x H 153 cm'),
    new games('./assets/img/topini-trixie.jpg', 'Topini di Peluche Trixie', $type['cat'], 4.99, 'Morbido con codina in corda', '8,5cm x 10cm')
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/20d85c6a60.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
</head>
<body>
    
    <div class="card-box">
    <?php    
        foreach ($products as $product) {
                
            echo "<div class='card'>";
                
                echo "<img src='$product->imgpath' alt=''" . '<br>';
                echo "<h2>" . $product->name . "</h2>";
                echo $product->category->icon . $product->category->name . '<br>';
                echo $product->price . '<br>';

                if ($product instanceof food) {
                    
                    echo $product->weight . '<br>';
                    echo $product->ingredients . '<br>';
                    
                } elseif ($product instanceof accessories) {
                
                    echo $product->material . '<br>';
                    echo $product->size . '<br>';
                    

                } elseif ($product instanceof games) {
                    
                    echo $product->features . '<br>';
                    echo $product->size . '<br>';
                }

            echo "</div>";
                
        }
      ?>
    </div>

</body>
</html>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.card-box{
    width: 60%;
    margin-inline: auto;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding-top: 100px;
}

.card{
    padding: 10px;
    width: calc( 100% / 3 - 20px);
    border: 1px solid grey;
}

.card > *{
    padding-bottom: 20px;
}

.card img{
    width: 100%;
}
</style>