<?php

//Створити клас City. Описати 7 об’єктів та виведіть на екран для кожного міста назву і населення.

echo '<pre>';

class City {

    public string $name; 
    public int $population;

    public function __construct($name, $population) {
        $this->name = $name;
        $this->population = $population;
        echo 'Місто: ' .  $name . ' Населення: ' . $population . "\n";
    }   
       
}


$city1 = new City('Kharkiv', 1433886);
$city2 = new City('Kyiv', 2962180);
$city3 = new City('Odessa', 1015826);
$city4 = new City('Dnipro', 980948);
$city5 = new City('Zaporizhzhia', 722713);
$city6 = new City('Lviv', 721510);
$city7 = new City('Kryvyi Rih', 612750);

echo '</pre>';