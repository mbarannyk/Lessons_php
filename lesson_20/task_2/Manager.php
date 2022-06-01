<?php

namespace App;

use App\T_70;
use App\Junior;
use SplObserver;
use SplSubject;

class Manager implements SplObserver
{
     /**
     * @var bool
     */
    public bool $resultOfwork;

    /**
     * @var int
     */
    public int $GoodJob = 0;

    /**
    * @param SplSubject $subject
    */
   
    public function update(SplSubject $subject)
    {
        if ($this->resultOfwork = TRUE) {
            return $this->GoodJob++;
            echo 'Ура, Джуна похвалили!';
    }
}
}