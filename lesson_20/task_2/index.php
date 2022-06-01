<?php

use App\T_70;
use App\Junior;
use App\HR;
use App\Manager;

require_once '/var/www/vendor/autoload.php';


$TeamLead = new T_70 (['Хорошее настроение', 'Нормальное Настроение', 'Плохое настроение',  'Состояние «не попадись на глаза»']);

$allen = new HR();
$jim = new Manager();
$linda = new Junior();

$linda->ResultOfWork();

$TeamLead->attach($allen);
$TeamLead->attach($jim);

$TeamLead->notify();

$TeamLead->ChangeOfMood();


