#!/bin/bash

#Записати дані в файл. Скрипт приймає рядок і назву файлу. У кінець файлу з абзацу дописує рядок, що був переданий.

echo $1 >> $2

#консоль: ./task_2.bash 'We are the champions, my friends' song.txt