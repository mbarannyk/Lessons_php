<?php

function SortMarks($marks) {
    $file = file_get_contents("$marks");
    $file = explode("\n", $file, -1);
   return $file;

while (($info = fgetcsv($file, 1000, ";") ) !== false){
$name = array();
$firstname=array(); 
if(is_array($info)){
              $name[] = $info[0];//имя
              $firstname[] =$info[1];//фамилия
}
    }
}


SortMarks('/home/maryano4ka/Документы/php-lessons/Lessons_php/lesson_7/7.2/marks.csv');