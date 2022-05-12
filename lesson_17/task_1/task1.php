#!/bin/php

<?php

//Змінити розширення файлу. Скрипт приймає як параметри ім'я файлу та нове розширення. Відобразити старе і нове ім’я файлів.

function replace_extension($filename, $new_extension) {
    $info = pathinfo($filename);
    $new_file = $info['filename'] . '.' . $new_extension;
  
    echo 'Before: ' . $filename;
    echo '  After: ' . $new_file . "\n";
    exec("cp $filename $new_file");
}

$a = replace_extension('task1.php', 'txt');








