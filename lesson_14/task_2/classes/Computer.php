<?php

$conn = new PDO("mysql:host=localhost; dbname=Cities", "root", "root");
$word = $_GET['city'];
$letter = mb_substr($word, -1);
$result = $conn->query("SELECT name FROM Ukrainian_Cities WHERE name LIKE '$letter%'");
echo $result->fetch()['name'];