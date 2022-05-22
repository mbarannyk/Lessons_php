<?php

require_once '/var/www/vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\Model\Price;
use App\Model\Product;

$loader = new FilesystemLoader('/home/mariana/Документы/templates');
$twig = new Environment($loader);

$price = new Price (1000);
$products[] = new Product(1, "Apple", $price, "summer");