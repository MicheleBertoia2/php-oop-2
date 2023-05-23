<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
  protected $ingredients;
  protected $weight;

  function __construct($_title, $_price,$_category)
  {
    parent::__construct($_title, $_price,);
    $this->setCategory($_category);

  }


  public function setType($_ingredients){
    $this->ingredients = $_ingredients;
  }

  public function setWeight($_weight){
    $this->weight = $_weight;
  }


  public function getIngredients(){
    return $this->ingredients;
   }

  public function getWeight(){
    return $this->weight;
   }
}