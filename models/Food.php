<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
  protected $category;
  protected $type;

  function __construct($_category, $_title, $_price)
  {
    parent::__construct($_title, $_price);
    $this->setCategory($_category);
  }

  public function setCategory($_category){
    $this->category = $_category;
  }

  public function setType($_type){
    $this->type = $_type;
  }

  public function getCategory(){
    return $this->category;
   }

  public function getType(){
    return $this->type;
   }
}