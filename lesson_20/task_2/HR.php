<?php

namespace App;

use App\T_70;
use App\Junior;
use SplObserver;
use SplSubject;

class HR implements SplObserver
{
     
/**
 * @var int
 */
public int $BadJob = 0;

/**
 * @param SplSubject $subject
 */

public function ExtremeState(SplSubject $subject){
    if ($subject->ReturnNewMood() == 0) {
        $this->BadJob++;
    }
}

public function update(SplSubject $subject)
{
    $this->ExtremeState($subject);
}

public function DisplayResult(){
    echo 'HR посчитал, что Джун получил выговор ' . $this->BadJob . ' раз.';
}
}
