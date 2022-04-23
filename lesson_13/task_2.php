<?php

//Розробити структуру класів Figure-Rectangle-Square. Виведіть на екран площу та периметри квадрату та прямокуника.

echo '<pre>';

class Figure {

        public function Area() {}
        public function  Perimetr() {}      
}

class Rectangle extends Figure {
    public $bigSide;
    public $smallSide;

    public function __construct($bigSide, $smallSide) {
        $this->bigSide = $bigSide;
        $this->smallSide = $smallSide;
    }

    public function Area(){
        return 'Площа прямокутника: ' . $this->bigSide * $this->smallSide . ' од.кв.' . "\n";
    }

    public function Perimetr(){
        return 'Периметр прямокутника: ' . $this->bigSide * 2 + $this->smallSide * 2 . ' од.' . "\n";
    }

}

class Square extends Figure {
    public $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function Area(){
        return 'Площа квадрата: ' . $this->side * $this->side . ' од.кв.' . "\n";
    }

    public function Perimetr(){
        return 'Периметр квадрата: ' . $this->side * 4 . ' од.' . "\n";
    }

}

$obj = new Rectangle (5, 6);
$obj1 = new Square (5);

echo ($obj->Area());
echo ($obj->Perimetr());

echo ($obj1->Area());
echo ($obj1->Perimetr());

echo '</pre>';