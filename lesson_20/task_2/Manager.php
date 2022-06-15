<?php

namespace App;

use App\T_70;
use App\Junior;
use SplObserver;
use SplSubject;

class Manager implements SplObserver
{
     /**
     * @var int
     */
    public int $GoodJob = 0;

    // /**
    // * @param SplSubject $subject
    // */
   
    public function ExtremeState(SplSubject $subject){
        if ($subject->ReturnNewMood() == $subject->CountMoods() - 1) {
            $this->GoodJob++;
        }
    }

    public function update(SplSubject $subject)
    {
        $this->ExtremeState($subject);
    }
    
    public function DisplayResult(){
        echo 'Менеджер посчитал, что Джуна похвалили ' . $this->GoodJob . " раз.<br />";
    }

    
}