<?php
        /*Староста ведет учет оценок по всем студентам и по всем экзаменам в csv файле.  Написать функцию, которая создаст 
        файлы Отличники.csv, Хорошисты.csv, Троешники.csv, Пересдача.csv и запишет в следующие файлы соответсвующие названию 
        данные.*/
        function SortMarks($marks) {
                $file = file($marks, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );
    
                foreach ($file as $key => $value) {
                    $sen=explode(',', $value);
                    $array[$sen[0]]=[$sen[1],$sen[2]];
                }
              /*  $array2 = [];
                $array3 = [];
                $array4 = [];
                $array5 = [];

                for ($i = 0; $i < count($array); $i++) {
                        foreach ($array as $key => $val) {
                                foreach ($val as $k =>$v) {
                                        if ($v = '5') {
                                   $array5[] = $array;
                           }
                        }                        
                }*/


               print_r($array);
        }

                  
        
       var_dump(SortMarks("/home/maryano4ka/Документы/php-lessons/Lessons_php/lesson_7/7.2/marks.csv"));