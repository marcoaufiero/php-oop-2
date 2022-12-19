<?php 

include_once __DIR__ . '/products.php';

class games extends Product {
  public $features;
  public $size;

  public function __construct(
    String $imgpath,
    String $name,
    Category $category,
    Float $price,
    
    
    String $features,
    String $size 

  ) {
    $this->features = $features;
    $this->size = $size;
    parent::__construct($imgpath,$name,$category,$price);
  }
}

?>