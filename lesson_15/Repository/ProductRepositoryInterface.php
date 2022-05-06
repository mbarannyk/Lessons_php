<?php

namespace App\Repository;

use App\Exception\ProductAlreadyExsistException;
use App\Model\Product;

require '/home/maryano4ka/vendor/autoload.php';

interface ProductRepositoryInterface
{
    /**
     * @param Product $product
     *
     * @throws ProductAlreadyExsistException
     */
    public function addProduct(Product $product): void;

    public function findAllProducts(): array;

    /**
     * @param Product $product
     *
     * @throws ProductNotFoundException
     */
    public function updateProduct(Product $product): void;

    /**
     * @param Product $product
     *
     * @throws ProductNotFoundException
     */
    public function deleteProduct(Product $product): void;
}
