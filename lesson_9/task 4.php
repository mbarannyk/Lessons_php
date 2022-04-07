<?php
        //Напишите функцию, которая оставляет в массиве только уникальные значения
        
        function unique(array $a): array {
            $new = [];
            foreach ($a as $v) {
                if (!in_array($v, $new)) {
                  $new [] = $v;
              }
            }
            return($new);
        }
        $a = [2,5,4,3,2,4];
    
        var_dump(unique($a));


    