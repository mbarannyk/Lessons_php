<?php

namespace App;
use App\Junior;
use App\Manager;
use App\HR;
use SplSubject;
use SplObject;

Class T_70 implements SplSubject {

    /**
     * @var int
     */
    public int $resultOfwork;
    
    /**
     * @var array
     */
    public array $moods;

    /**
     * @var int
     */
    public int $currentMood;

    /**
     * @var array
     */
    public array $observers;


    /**
     * @param array $moods
     */
    public function __construct(array $moods)
    {
        $this->moods = $moods;
    }
    
       /**
     * @return int
     */
    public function CountMoods()
    {
        return count($this->moods);
    }
    
 
     public function RandMood()
    {
       return $currentMood = mt_rand(0, ($this->CountMoods() - 1));
    } 
    
    public function addNewMood(string $mood)
    {
       $this->moods[] = $mood;
    }

    //  /**
    //  * @param int $resultOfwork
    //  */
    public function ChangeOfMood ()
    {
        // $this->ResultOfWork();
        if ($this->resultOfwork = 1) {
            $this->RiseOfMood(); 
        } else {
            $this->FallOfMood(); 
        }
    }

    /**
     * @param int $newMood
     */
    public function RiseOfMood() 
    {
        $this->newMood = $newMood;
        $this->RandMood();
        $newMood = $currentMood + 1; 
        echo 'У Т-70 настроение однозначно улучшилось!';
        echo $newMood;
   
}

    /**
     * @param int $newMood
     */
    public function FallOfMood() 
    {
        $this->newMood = $this->currentMood - 1; 
        echo 'У Т-70 настроение стало хуже(!';
    }

     /**
     * @param SplObserver $observer
     */
     public function attach(\SplObserver $observer) 
    {
        $this->observers[] = $observer;
    }
       
    /**
     * @param SplObserver $observer
     */
    public function detach(\SplObserver $observer) 
    {       
        $key = array_search($observer,$this->observers, true);
        if($key){
            unset($this->observers[$key]);
        }
    }

    public function notify(): void
    {
        echo "Тема: Произошло уведомление наблюдателей.\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

   
   
}