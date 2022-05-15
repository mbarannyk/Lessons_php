<?php

namespace App\Exception;
use Throwable;
use App\Repository\ProductInMemoryReository;

class ProductAlreadyExsistException extends \Exception
{
    protected $message = "Такий продукт вже існує";
}