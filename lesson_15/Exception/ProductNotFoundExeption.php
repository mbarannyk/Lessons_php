<?php

namespace App\Exception;
use Throwable;
use App\Repository\ProductInMemoryReository;

class ProductNotFoundException extends ProductBaseExclusion
{
    protected $message = "Такий продукт відсутній в базі даних";

}