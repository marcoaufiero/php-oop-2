<?php 

include_once __DIR__ . '/products.php';

class food extends Prodotto {
  public $weight;
  public $ingredients;

  public function __construct(
    String $imgpath,
    String $name,
    Float $price,
    Category $category,
    
    String $weight,
    String $ingredients 

  ) {
    $this->weight = $weight;
    $this->ingredients = $ingredients;
    parent::__construct($imgpath,$name,$price,$category);
  }
}

?>