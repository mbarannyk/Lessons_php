<?php

// помножити всі елементи масиву на n (зазначений аргумент)
// рекурсивно порахувати суму цифр числа (залишок на поділ)
// порахувати суму всіх елементів масиву (array_reduce)
// відфільтрувати елементи масиву більше n

Class Task1 
{
    public array $arr;
    public int $n;
    public int $number;
    public int $sum;

    public function Multiply ($arr, $n) 
    {
        foreach ($arr as $num) {
            $newArr[] = $num * $n; 
        } var_dump($newArr);
    }

    public function CountR ($number)
    { $sum = 0;
        do {
            $sum += $number % 10;
        } while ($number = $number / 10);
        echo $sum;
    }

    public function CountArr ($arr) 
    {
        function sum($carry, $item)
        {
            $carry += $item;
            return $carry;
        }
        echo $sum = array_reduce($arr, 'sum');
    }

    public function ArFilter ($arr, $n) 
    {
        $newArr = [];
        foreach ($arr as $num) {
            if($num > $n) {
            $newArr[] = $num;
            } 
        }
        print_r($newArr);
    } 
}

// $arr1 = [1,3,5,2,4,6];
// $var1 = new Task1();
// $var1->Multiply($arr1, 5);

// $var2 = new Task1();
// $var2->CountR(458);

// $arr3 = [1,3,5,2,4,6,7];
// $var3 = new Task1();
// $var3->CountArr($arr3);

// $arr4 = [1,3,5,2,4,6,7,3];
// $var4 = new Task1();
// $var4->ArFilter($arr4, 4);