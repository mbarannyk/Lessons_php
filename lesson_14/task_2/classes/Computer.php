<?php


$conn = new PDO("mysql:host=localhost; dbname=Cities", "root", "root");
$word = $_GET['city'];
$letter = mb_substr($word, -1);
if (str_contains($letter, 'ь') || str_contains($letter, 'й')) {
    $letter = mb_substr($word, -2);
}

$result = $conn->query("SELECT name FROM Ukrainian_Cities WHERE name LIKE '$letter%' ORDER BY RAND()");
$BotCity = $result->fetch()['name'];


function contains($cities, $BotCity) {
        for ($i = 0; $i <= count($cities); $i++) {
            if ($cities[$i] == $BotCity) {
                return $result;
            } else {
            return $BotCity;
            }
     }
}
echo $BotCity;


if (isset($_COOKIE['BotCity'])) {
    $cities[] = $_COOKIE['BotCity'];
    setcookie($BotCity, serialize($cities), time()+900);
       
    }  else {
        $cities[] = $BotCity;
        setcookie($BotCity, serialize($cities), time()+900);
        
}  
$letter1 = mb_substr($BotCity, -1);
if (str_contains($letter1, 'ь') || str_contains($letter1, 'й')) {
    $letter1 = mb_substr($BotCity, -2);
}

setcookie('letter', $letter, time()+900);
setcookie('letter1', $letter1, time()+900);