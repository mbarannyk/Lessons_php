<?php

/*Створити файли (та відповідні класи в них) Cat.php, Dog.php - у цих класах повинні бути метод say() - яка у відповідних 
класах буте коректно повертати строку "гав"/"мяу". У файлі index.php підключити ці файли з класами, створити об'єкти цих
 класів та визвати ці методи */

require_once 'classes/Cat.php';

$cat = new Cat;
$cat-> say();

require_once 'classes/Dog.php';

$dog = new Dog;
$dog-> say();
