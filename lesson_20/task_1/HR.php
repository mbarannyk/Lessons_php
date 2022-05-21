<?php

namespace App;

use App\T_70;
use App\Junior;
use SplObserver;
use SplSubject;

class HR implements SplObserver
{
    
public function update(SplSubject $subject)
{
    echo 'Не ругайте Джуна...';
}
}
