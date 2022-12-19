<?php 

include_once __DIR__ . '/category.php';

class MyClass {
  public $imgpath;
  public $name;
  public $price;
  public $category;

  public function __construct(
    String $imgpath,
    String $name,
    Float $price,
    Category $category

  ) {
    $this->imgpath = $imgpath;
    $this->name = $name;
    $this->price = $price;
    $this->category = $category;
    
  }
}

?>