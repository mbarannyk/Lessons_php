<?php

namespace App;

Class Junior 
{ 
 /**
 * @var int
 */
public int $resultOfwork;

    public function ResultOfWork() 
    {
        return $this->resultOfwork = mt_rand(0, 1);
    }
}