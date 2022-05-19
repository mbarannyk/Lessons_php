<?php
namespace Tests\Model;

use App\Model\Price;
use PHPUnit\Framework\TestCase;

class PriceTest extends TestCase
{
    
    public function test__construct()
        {
            $price = new Price(458);
            $this->assertEquals(0, $price->__construct(458));
        }

    public static function testcreateFromString()
    {
        TestCase::assertEquals('458', Price::createFromString('458')); 
    }

    public function test__toString()
    {
        $price1 = new Price(456);
        $this->assertIsString('4.56', $price1->__toString(456));
     
    }
}