<?php

$conn = new PDO("mysql:host=localhost; dbname=Cities", "root", "root");
$word = $_GET['city'];
$letter = mb_substr($word, -1);
$result = $conn->query("SELECT name FROM Ukrainian_Cities WHERE name LIKE '$letter%' ORDER BY RAND()");
$BotCity = $result->fetch()['name'];
echo $BotCity;

function contains($cities, $BotCity) {
        for ($i = 0; $i <= count($cities); $i++) {
            if ($cities[$i] == $BotCity) {
                return $result;
            } else {
            return $BotCity = $result->fetch()['name'];
            }
     }
}



if (isset($_COOKIE['BotCity'])) {
    $cities[] = $_COOKIE['BotCity'];
    setcookie($BotCity, serialize($cities), time()+900);
       
    }  else {
        $cities[] = $BotCity;
        setcookie($BotCity, serialize($cities), time()+900);
        
}  



$letter1 = mb_substr($BotCity, -1);