<?php

namespace App;

use App\T_70;
use App\Junior;
use SplObserver;
use SplSubject;

class HR implements SplObserver
{
 
 /**
  * @var bool
  */
public bool $resultOfwork;
    
/**
 * @var int
 */
public int $BadJob = 0;

public function update(SplSubject $subject)
{
    if ($this->resultOfwork === 0) {
        return $this->BadJob++;
        echo 'Не ругайте Джуна...';
    }
}
}
