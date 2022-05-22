<?php

require_once '/var/www/vendor/autoload.php';

use App\Repository\ProductInMySQLRepository;

$id = $_POST["new_id"];
$name = $_POST["new_name"];
$price = $_POST["new_price"];
$season = $_POST["new_season"];
$update = new ProductInMySQLRepository();
$update->updateProduct("$name","$price","$season","$id");