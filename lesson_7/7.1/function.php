<?php
        /*Написать функцию, которая рекурсивно выведет на экран содержимое каталога.
        Функция принимает аргументом строку абсолютный путь к каталогу,
        который необходимо просканировать.*/
        
        function DirContent($pathD) {
            $d = opendir($pathD);
            if (!$d) {
                return;}
            while (false !== ($file = readdir($d))) {
                if ($file == '.' || $file == '..') continue;
            $pathF = $d .'/'. $file;
            if(is_dir($pathF)) {
                echo " Direct: ".$file." ";
               DirContent($pathF);
            }
            else {
                echo " File: ".$file." ";
                }
            }
            closedir($pathD);
        }
            
        DirContent($pathD);