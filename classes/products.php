<?php 

include_once __DIR__ . '/category.php';

class Product {
  public $imgpath;
  public $name;
  public $category;
  public $price;
  

  public function __construct(
    String $imgpath,
    String $name,
    category $category,
    Float $price

  ) {
    $this->imgpath = $imgpath;
    $this->name = $name;
    $this->category = $category;
    $this->price = $price;
  }
}

?>