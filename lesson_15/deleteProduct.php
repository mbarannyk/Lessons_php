<?php

require_once '/var/www/vendor/autoload.php';

use App\Repository\ProductInMySQLRepository;

$del = new ProductInMySQLRepository();

$delProd = $_POST["deleteProduct"];
$del->deleteProduct("$delProd");