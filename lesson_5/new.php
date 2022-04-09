<?php

/* Написать функцию которая принимает первым аргументом строку, а вторым символ. 
В случае если искомые символ присуствует в строке то заменить его встроке на такой же но в верхнем регистре
*/

function phrase($string, $symbol)  {
    $uppersymbol = mb_convert_case($symbol, MB_CASE_UPPER_SIMPLE, "UTF-8");
   // $newfunction = str_replace($symbol, $uppersymbol, $string);
   // return ($newfunction);
   $pos = strrpos($string, $symbol);
        if ($pos === true) {
            $symbol = $uppersymbol;
    }
}

var_dump(phrase('string', "t"));