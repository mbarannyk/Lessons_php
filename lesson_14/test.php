<?php

// Даний довгий текст, у ньому зустрічаються слова довші за 7 символів! Якщо слово довше 7 символів, необхідно: 
// залишити перші 6 символів і додати зірку. Інші символи відрізуються. Шаблон: "я купив бронетранспортер учора" 
// Результат: "я купив бронет* вчора".

class Text {

    static $string;

    static function divStr(string $string) {
    $arr = preg_split("/[\s,]+/", $string);

        foreach ($arr as $word) {
            if (strlen($word) < 7) {
                $newar[] = $word;
            } else {
                $newar[] = mb_strimwidth($word, 0, 7, "*");
            }
        } return implode(' ', $newar);
    } 
}

$text = 'я купив бронетранспортер учора';

var_dump(Text::divStr($text));


