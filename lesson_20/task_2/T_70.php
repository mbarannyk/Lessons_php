<?php

namespace App;
use App\Junior;
use App\Manager;
use App\HR;
use SplSubject;
use SplObject;

class T_70 implements \SplSubject
{

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
        $this->currentMood = mt_rand(0, ($this->CountMoods() - 1));
        return $this->currentMood;
    }
    
    public function addNewMood(string $mood)
    {
        $this->moods[] = $mood;
    }

    public function ChangeOfMood(int $resultOfwork)
    {
        if ($resultOfwork === 1) {
            $this->RiseOfMood();
        } else {
            $this->FallOfMood();
        }
        $this->notify();
    }

    /**
     * @param int $newMood
     */
    public function RiseOfMood()
    {
        if (isset($this->newMood)){
            $this->newMood = $this->newMood + 1; 
        } else {
            $this->newMood = $this->RandMood() + 1;
        }
        foreach ($this->moods as $key => $value) {
            if ($this->newMood == $key) {
                echo "У Т-70 настроение улучшилось!<br />" . 'Было состояние: ' . $this->moods[$this->newMood - 1] . '. Теперь у Т-70 ' . $value . "!<br />";
                return;
            }  elseif ($this->newMood == $this->CountMoods()) {
                $this->newMood = $this->CountMoods() - 1;
                echo "У Т-70 настроение улучшилось, хотя лучше некуда!<br />" . ' Поэтому у Т-70 осталось ' . $this->moods[$this->CountMoods()-1] . "!<br />";
                return;
            }
        }
    }

    /**
     * @param int $newMood
     */
    public function FallOfMood() 
    {
        if (isset($this->newMood)){
            $this->newMood =  $this->newMood - 1; 
        } else {
            $this->newMood = $this->RandMood() - 1;
        }
        foreach ($this->moods as $key => $value) {
            if ($this->newMood == $key) {
                echo "У Т-70 настроение стало хуже!<br />" . 'Было состояние: ' . $this->moods[$this->newMood + 1] . '. Теперь у Т-70 ' . $value . "!<br />";
                return;
            }  elseif ($this->newMood < 0) {
                $this->newMood = 0;
                echo "У Т-70 настроение стало хуже, хотя хуже некуда!<br />" . ' Поэтому у Т-70 осталось ' . $this->moods[0] . "!<br />";
                return;
            }
        }
    }

    public function ReturnNewMood(){
       return $this->newMood;
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

    /**
     * @param SplObserver $observers
     */
    public function notify(): void
    {
        echo "Тема: Произошло уведомление наблюдателей о результате работы Джуниора.<br /><br />";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }  
}