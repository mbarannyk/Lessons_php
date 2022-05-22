<?php

require_once '/var/www/vendor/autoload.php';

use App\Repository\ProductInMySQLRepository;

$DisplayProduct = new ProductInMySQLRepository();
$products = $DisplayProduct->getAllProducts();

foreach ($products as $product) {
   echo "{$product['id']} {$product['name']} {$product['price']} {$product['season']}. <hr />";
}