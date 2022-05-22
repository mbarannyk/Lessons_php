<?php

namespace App\connection;

use PDO;

class DB
{
private $base;

	public function __construct()
	{
	$this->base = new PDO("mysql:host=localhost; dbname=Products", "root", "root");
	}
	}
