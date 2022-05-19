<?php

namespace App\Model;

use App\Model\Price;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    private Product $product;

    private function PriceMock()
    {
        $price = $this->createMock(Price::class);
        $price->method('createFromString')
            ->willReturn(456);
        return $price;
    }
    protected function setUp(): void
    {
        $this->product = new Product(1,'apple',$this->PriceMock(),'autumn');
    }

    public function test__construct()
    {
        $this->assertEquals(0, $this->product->__construct(1, 'apple', $this->PriceMock(), 'autumn'));
    }

    public function testgetId()
    {
        $this->assertEquals(1, $this->product->getId());
    }

    public function testgetName()
    {
        $this->assertEquals('apple', $this->product->getName());
    }

    public function testgetPrice()
    {
        $this->assertEquals($this->PriceMock(), $this->product->getPrice());
    }

    public function testgetSeason()
    {
        $this->assertEquals('autumn', $this->product->getSeason());
    }

    public function testtoArray()
    {
        $this->assertEquals([
            'id' => 1,
            'name' => 'apple',
            'price' => '',
            'season' => 'autumn'], $this->product->toArray());
    }
}