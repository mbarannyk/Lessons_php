<?php

require_once '/var/www/vendor/autoload.php';

use App\Repository\ProductInMySQLRepository;
use App\Model\Product;

$create = new ProductInMySQLRepository();

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$season = $_POST['season'];

$create->addProduct($id, $name, $price, $season);