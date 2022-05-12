<?php

require_once '/home/maryano4ka/Документы/php-lessons/Lessons_php/vendor/autoload.php';

use App\Exception\ProductAlreadyExsistException;
use App\Model\Price;
use App\Model\Product;
use App\Repository\ProductInMemoryRepository;


//header("Access-Control-Allow-Origin: *");
$inputJSON = file_get_contents('php://input');

$data = json_decode($inputJSON, true);

$price = Price::createFromString($data['price']);
$product = new Product($data['id'], $data['name'], $price, $data['season']);


if (isset ($_REQUEST['subAddProduct'])) {
    try {

    $productRepository = new ProductInMemoryRepository();
    $productRepository->addProduct($product);
} catch (ProductAlreadyExsistException $exception) {
return $exception = ProductAlreadyExsistException::ProductAlreadyExsist($product);
}
} elseif (isset ($_REQUEST['UpdProduct'])) {
    $productRepository = new ProductInMemoryRepository();
    $productRepository->updateProduct($product);
    
} elseif (isset ($_REQUEST['DelProduct'])) {
    $productRepository = new ProductInMemoryRepository();
    $productRepository->deleteProduct($product);
}

return $products->ShowAllProducts();

header('Content-Type: application/json');

die(json_encode($product->toArray()));
