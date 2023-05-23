<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
  protected $ingredients;
  protected $weight;

  function __construct($_title, $_price)
  {
    parent::__construct($_title, $_price, new Category);
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