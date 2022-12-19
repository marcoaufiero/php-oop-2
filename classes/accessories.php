<?php 

include_once __DIR__ . '/products.php';

class accessories extends Prodotto {
  public $material;
  public $size;

  public function __construct(
    String $imgpath,
    String $name,
    Float $price,
    Category $category,
    
    String $material,
    String $size 

  ) {
    $this->material = $material;
    $this->size = $size;
    parent::__construct($imgpath,$name,$price,$category);
  }
}

?>