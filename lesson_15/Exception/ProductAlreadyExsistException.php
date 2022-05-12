<?php

namespace App\Exception;

use Throwable;
use App\Repository\ProductInMemoryReository;

class ProductAlreadyExsistException extends \Exception
{
    private int $id;

    public function ProductAlreadyExsist() 
    {
        $this->id = $id;
        if (isset($id, $products)) {
            echo 'Такий продукт вже існує';
        }
    }
}