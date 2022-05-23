<?php

namespace App;
use App\Junior;
use App\Manager;
use App\HR;
use SplSubject;
use SplObject;

Class T_70 implements SplSubject {

    /**
     * @var bool
     */
    public bool $resultOfwork;
    
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
     * @return int
     */
     public function RandMood($moods)
    {
        $this->currentMood = mt_rand(0, ($this->CountMoods($this->moods) - 1));
    } 
    
     /**
     * @param array $moods
     */
    public function __construct(array $moods)
    {
        $this->RandMood($moods);
    }

    /**
     * @return int
     */
    public function CountMoods($moods)
    {
        return count($this->moods);
    }
    
    public function addNewMood(string $mood)
    {
       $this->moods[] = $mood;
    }

     /**
     * @param bool $resultOfwork
     */
    public function ChangeOfMood ($currentMood, $resultOfwork): void
    {
        if ($this->resultOfwork === 1) {
            $this->RiseOfMood ($this->$currentMood); 
        } elseif ($this->resultOfwork === 0) {
            $this->FallOfMood ($this->$currentMood); 
        }
    }

    /**
     * @param int $newMood
     */
    public function RiseOfMood ($currentMood) 
    {
        $newMood = $this->currentMood + 1; 
        echo 'У Т-70 настроение однозначно улучшилось!';
    }

    /**
     * @param int $newMood
     */
    public function FallOfMood ($currentMood) 
    {
        $newMood = $this->currentMood - 1; 
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
        echo "Тема: Уведомление наблюдателей...\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

   
   
}