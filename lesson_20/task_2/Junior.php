<?php

namespace App;

Class Junior 
{ 
 /**
 * @var int
 */
private static int $resultOfwork;

    static public function ResultOfWork() 
    {
        return self::$resultOfwork = mt_rand(0, 1);
    }
}