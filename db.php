<?php

require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/House.php';
require_once __DIR__ . '/models/ToY.php';

$products = [
  new Toy("papera di gomma","5.99","cat"),
  new House("Cuccia Deluxe","24.99","dog")
];

$products[0]->setMaterial('gomma');

// var_dump($products);