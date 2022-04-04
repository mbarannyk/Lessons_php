<?php
        //Напишите функцию, которая оставляет в массиве только уникальные значения
        
        function unique(array $a): array {
            $b = array_count_values($a);
            $new = [];
            for ($i = 0; $i < count($a); $i++) {
                foreach ($b as $key => $val) {
                    if ($a[$i] == $key && $val == 1) {
                    $new[] = $a[$i]; 
                    } 
                }
            }
            return ($new);
        }
        $a = [2,5,4,3,2];
    
        var_dump(unique($a));