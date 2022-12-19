<?php 

include_once __DIR__ . '/products.php';

class food extends Product {
  public $weight;
  public $ingredients;

  public function __construct(
    String $imgpath,
    String $name,
    Category $category,
    Float $price,
    
    String $weight,
    String $ingredients 

  ) {
    $this->weight = $weight;
    $this->ingredients = $ingredients;
    parent::__construct($imgpath,$name,$category,$price);
  }
}

?>