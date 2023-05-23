<?php

require_once __DIR__ . '/Product.php';

class House extends Product {
  protected $category;
  protected $material;

  function __construct($_category, $_title, $_price)
  {
    parent::__construct($_title, $_price);
    $this->setCategory($_category);
  }

  public function setCategory($_category){
    $this->category = $_category;
  }

  public function setMaterial($_material){
    $this->material = $_material;
  }

  public function getCategory(){
    return $this->category;
   }

  public function getMaterial(){
    return $this->material;
   }
}