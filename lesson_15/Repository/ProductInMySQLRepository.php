<?php

namespace App\Repository;

use App\Model\Product;
use App\Exception\ProductAlreadyExsistException;
use App\Repository\ProductRepositoryInterface;
use App\connection;

require_once '/var/www/vendor/autoload.php';

class ProductInMySQLRepository implements ProductRepositoryInterface
{
   
        private $base;
    

    public function addProduct(Product $product): void {
        $this->base->query("INSERT INTO Products (name, price, season) VALUES ('$name', '$price', '$season')");
    }

    public function updateProduct(Product $product): void {
        $this->base->query("UPDATE Products SET name = '$name', price = '$price', season = '$season' WHERE id = '$id'");
    }
    
    public function getAllProducts() {
        return $this->base->query("SELECT * FROM Products");
    }

        public function deleteProduct(int $id): void {
        $this->base->query("DELETE FROM Products WHERE id = '$id'");
    }
    

    public function DisplayProducts(): void {
        $query = $this->getAllProducts();
        while($row = $query->fetch()) {
            $result[] = $row;
        } echo json_encode($result);
    }
}