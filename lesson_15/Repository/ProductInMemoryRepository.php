<?php

namespace App\Repository;

use App\Exception\ProductAlreadyExsistException;
use App\Model\Product;
use Exception;
require_once '/home/maryano4ka/Документы/php-lessons/Lessons_php/vendor/autoload.php';

class ProductInMemoryRepository implements ProductRepositoryInterface
{
    /**
     * @var Product[]
     */
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function addProduct(Product $product): void
    {
        if (array_key_exists($product->getId(), $this->products)) {
            // error - already exist in storage
            throw new ProductAlreadyExsistException();
        }

        $this->products[$product->getId()] = $product;
        $products[] = $product;
    }

    public function updateProduct(Product $product): void
    {
        $this->products[$product->getId()]=$product;
        echo 'Дані про продукт оновлено';
    }

    public function deleteProduct(Product $product): void
    {
        if ($this->products[$product->getId()]=$product)
        {
            unset ($this->products[$product->getId()]);
            echo 'Продукт видалено з бази';
        };
    }

    public function ShowAllProducts()
    {
    foreach($this->products as $product)
    {
        print_r($product);
        echo '<br>';
    }
    }
}