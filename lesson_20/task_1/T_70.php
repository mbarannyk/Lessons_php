<?php

namespace App;
use App\Junior;
use App\Manager;
use App\HR;
use SplSubject;
use SplObject;

Class T_70 implements SplSubject {

    public bool $resultOfwork;
    public array $moods;
    protected int $currentMood;
    public int $GoodJob = 0;
    public int $BadJob = 0;
    public array $observers;

     public function RandMood()
    {
        $this->currentMood = mt_rand(0, ($this->CountMoods() - 1));
    } 
    
    public function __construct(array $moods)
    {
        $this->RandMood();
    }
public function CountMoods(): int
    {
        return count($this->moods);
    }
    
    public function addNewMood(string $mood)
    {
       $this->moods[] = $mood;
    }

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

     public function attach(\SplObserver $observer) 
    {
        $this->observers[] = $observer;
    }
       
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

    public function GoodJob($resultOfwork): int
    {
        if ($resultOfwork === 1) {
            return $this->$GoodJob++;
        }
    }

    public function BadJob($resultOfwork): int
    {
        if ($resultOfwork === -1) {
            return $this->$BadJob++;
        }
    }
}