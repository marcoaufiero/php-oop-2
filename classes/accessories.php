<?php 

include_once __DIR__ . '/products.php';

class accessories extends Product {
  public $material;
  public $size;

  public function __construct(
    String $imgpath,
    String $name,
    Category $category,
    Float $price,
    
    String $material,
    String $size 

  ) {
    $this->material = $material;
    $this->size = $size;
    parent::__construct($imgpath,$name,$category,$price);
  }
}

?>