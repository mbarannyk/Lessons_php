<?php

use App\T_70;
use App\Junior;
use App\HR;
use App\Manager;

require_once '/var/www/vendor/autoload.php';

$moods = ['Хорошее настроение', 'Нормальное Настроение', 'Плохое настроение',  'Состояние «не попадись на глаза»'];
$TeamLead = new T_70 ($moods);


$TeamLead->attach(new HR(), 'BadJob');
$TeamLead->attach(new Manager(), 'GoodJob');

