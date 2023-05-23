<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product {
  protected $material;

  function __construct($_title, $_price)
  {
    parent::__construct($_title, $_price, new Category );
  }

  public function setMaterial($_material){
    $this->material = $_material;
  }

  public function getMaterial(){
    return $this->material;
   }
}