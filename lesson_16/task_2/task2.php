#!/bin/php

<?php

//Записати дані в файл. Скрипт приймає рядок і назву файлу. У кінець файлу з абзацу дописує рядок, що був переданий.

function add_text($string, $filename) {
    exec("echo $string >> $filename");
}

$song = add_text('We are the champions, my friends', 'song.txt');