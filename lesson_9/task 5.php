<?php
        /*Напишите функцию, которая принимает два параметра - входящий массив и размер исходных подмассивов. 
        Суть в том, что бы разделить один большой массив на несколько маленьких (заданного размера)*/
        
        function dev(array $a, int $b)  {
            $new = [];
            for ($i = 0; $i < count($a)/$b; $i++) {
                 $new[$i] = array_slice($a, $i*$b, $b);
            }return ($new);
        } 

        $a = [3,4,2,3,4,5];
    
        var_dump(dev($a, 2));
        