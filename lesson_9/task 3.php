<?php
        /*Напишите функцию, которая принимает два параметра - массив и элемент. 
        Функция должна из переданного массива удалить все переданные элементы.*/
        
        
        function del(array $a, $b): array {
            $new = [];
            for ($i = 0; $i <= count($a); $i++) {
            foreach ($a as $key => $value) {
                if ($key <= count($a)) {
            if ($value == $b) {
                unset($a[$key]);
            } else {
            $new[] = $a[$key];
            }
            } 
            }return ($a);
            }   
        }
        $a = [1,4,2,3,4];
    
        var_dump(del($a, 1));
        