#!/bin/bash

#Змінити розширення файлу. Скрипт приймає як параметри ім'я файлу та нове розширення. Відобразити старе і нове ім’я файлів.

ls | grep $1

mv $1 "${1%.*}.$2"

ls | grep "${1%.*}.$2"


#консоль: ./task1.bash example.txt md