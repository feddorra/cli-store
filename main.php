<?php

use Feddorra\Product\Product;
use Feddorra\Description\Description;
use Feddorra\Description\DescriptionRepository;


require_once __DIR__ . "/src/autoload.php";

//$product = new Product();
//$descriptionRepository = new DescriptionRepository();
//$product->setDescription($descriptionRepository->select(1));
//$product->setName('kekw');
$productRepository = new \Feddorra\Product\ProductRepository();
var_dump($productRepository->select());