<?php

namespace App\Repository;

use App\Exception\ProductAlreadyExsistException;
use App\Model\Product;
use Exception;
require_once '/var/www/vendor/autoload.php';

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
            throw new ProductAlreadyExsistException('already exist in storage');
        }

        $this->products[$product->getId()] = $product;
    }

    public function findAllProducts(): array
    {
    return $this->products;
    }

    public function updateProduct(Product $product): void
    {
        $this->products[$product->getId()]=$product;
    }

    public function deleteProduct(Product $product): void
    {
        if ($this->products[$product->getId()]=$product)
        {
            unset ($this->products[$product->getId()]);
        };
    }

}