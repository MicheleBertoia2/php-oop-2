<?php

class Product {
  protected $image;
  protected $title;
  protected $price;
  protected $description;

  function __construct($_title, $_price){
    $this->setTitle($_title);
    $this->setPrice($_price);
  }
  
    public function setImage($_image){
      $this->image = $_image;
    }

    public function setTitle($_title){
      $this->title = $_title;
    }

    public function setPrice($_price){
      $this->price = $_price;
    }

    public function setDescription($_description){
      $this->description = $_description;
    }
  
    public function getImage(){
     return $this->image;
    }

    public function getTitle(){
     return $this->title;
    }

    public function getPrice(){
     return $this->price;
    }

    public function getDescription(){
     return  $this->description;
    }
    

}