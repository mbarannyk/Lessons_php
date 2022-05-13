<?php
namespace Tests\Model;

use App\Model\Task1;
use PHPUnit\Framework\TestCase;

class Task1Test extends TestCase
{
    public function testMultiply()
    {
        $task1 = new Task1(array (1, 3, 5), 2);
        $this->assertIsArray($task1->Multiply(array (1, 3, 5), 2));
    }

    public function testCountR()
    {
        $task2 = new Task1(458);
        $this->assertIsInt($task2->CountR(458));
    }

    public function testCountArr()
    {
        $task3 = new Task1(array (1, 3, 5));
        $this->assertIsInt($task3->CountArr(array (1, 3, 5)));
    }

    public function testArFilter()
    {
        $task4 = new Task1(array (1, 3, 5), 2);
        $this->assertIsArray($task4->ArFilter(array (1, 3, 5), 2));
    }
}