<?php 

include_once __DIR__ . '/products.php';

class games extends Prodotto {
  public $features;
  public $size;

  public function __construct(
    String $imgpath,
    String $name,
    Float $price,
    Category $category,
    
    String $features,
    String $size 

  ) {
    $this->features = $features;
    $this->size = $size;
    parent::__construct($imgpath,$name,$price,$category);
  }
}

?>