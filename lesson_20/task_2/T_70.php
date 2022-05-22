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
     * @var int
     */
    public int $GoodJob = 0;

    /**
     * @var int
     */
    public int $BadJob = 0;

    /**
     * @var array
     */
    public array $observers;

     public function RandMood()
    {
        $this->currentMood = mt_rand(0, ($this->CountMoods() - 1));
    } 
    
     /**
     * @param array $moods
     */
    public function __construct(array $moods)
    {
        $this->RandMood();
    }

    /**
     * @return int
     */
    public function CountMoods()
    {
        return count($this->moods);
    }
    
    public function addNewMood(string $mood)
    {
       $this->moods[] = $mood;
    }

     /**
     * @param bool $resultOfwork
     * @return bool
     */
    public function ChangeOfMood ($currentMood, $resultOfwork) 
    {
        if (isset($this->currentMood) && $this->resultOfwork === 1) {
            $newMood = $this->currentMood + 1; 
                if (isset($this->moods[$newMood])) {
                echo 'У Т-70 поменялось настроение на ' . $this->moods[$newMood];
                $this->currentMood = $nextMood;
                return true;
            }
            echo 'У Т-70 остается настроение' . $this->getCurrentMood();
            return false;
        } elseif (isset($this->currentMood) && $this->resultOfwork === -1) {
            $newMood = $this->currentMood - 1; 
                    if (isset($this->moods[$newMood])) {
                    echo 'У Т-70 поменялось настроение на ' . $this->moods[$newMood];
                    $this->currentMood = $nextMood;
                return true;
            }
            echo 'У Т-70 остается настроение' . $this->getCurrentMood();
            return false;
        } 
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

    /**
     * @return int
     */
    public function GoodJob($resultOfwork): int
    {
        if ($resultOfwork === 1) {
            return $this->$GoodJob++;
        }
    }

    /**
     * @return int
     */
    public function BadJob($resultOfwork): int
    {
        if ($resultOfwork === -1) {
            return $this->$BadJob++;
        }
    }
}