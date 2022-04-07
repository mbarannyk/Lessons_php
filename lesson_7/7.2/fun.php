<?php
        /*Староста ведет учет оценок по всем студентам и по всем экзаменам в csv файле.  Написать функцию, которая создаст 
        файлы Отличники.csv, Хорошисты.csv, Троешники.csv, Пересдача.csv и запишет в следующие файлы соответсвующие названию 
        данные.*/
        function SortMarks($marks, $dir) {
                $file = file($marks, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );
    
                foreach ($file as $key => $value) {
                    $sen=explode(',', $value);
                    $array[$sen[0]]=[$sen[1], $sen[2]];
                }
                $array2 = [];
                $array3 = [];
                $array4 = [];
                $array5 = [];
               
                        foreach ($file as $key => $val) {
                                      $pos = strripos($val, '5');
                                      $pos1 = strripos($val, '4');
                                      $pos2 = strripos($val, '3');
                                      $pos3 = strripos($val, '2');
                                      if ($pos !== FALSE) {
                                   $array5[] = $val;
                                }       elseif ( $pos1 !== FALSE) {
                                        $array4[] = $val; 
                                }        elseif ( $pos2 !== FALSE) {
                                        $array3[] = $val;                 
                                }       elseif  ( $pos3 !== FALSE) {
                                        $array2[] = $val;                  
        }  
       
}
          
        function Csv($dir,$ar) {
        $fp = fopen($dir, "w");
        fputcsv($fp, $ar, ';');
         fclose($fp);
    }

        Csv("Отличники.csv", $array5);
        Csv("Хорошисты.csv", $array4);
        Csv("Троешники.csv", $array3);
        Csv("Пересдача.csv", $array2);
}          
        
       var_dump(SortMarks("/home/maryano4ka/Документы/php-lessons/Lessons_php/lesson_7/7.2/marks.csv", "/home/maryano4ka/Документы/php-lessons/Lessons_php/lesson_7/7.2/result/"));