<?php

require_once __DIR__ . '/Product.php';

class House extends Product {
  protected $material;
  protected $dimensions;

  function __construct($_title, $_price,$_category)
  {
    parent::__construct($_title, $_price,);
    $this->setCategory($_category);
  }


  public function setMaterial($_material){
    $this->material = $_material;
  }

  public function setDimensions($_dimensions){
    $this->dimensions = $_dimensions;
  }


  public function getMaterial(){
    return $this->material;
   }
   
   public function getDimensions(){
     return $this->dimensions;
    }
}

