<?php

// У продукту є 2 поля - назва (string) та ціна (Price) (Price теж потрібно створити).
// Продукт можна створити лише з цими полями та повністю проініціалізованим. Не повинно бути можливості 
//створити продукт без будь-якого з двох обов'язкових параметрів.
//  Має бути два методи/"конструктори":
//    приймає як аргументи (string $title, Price $price)
//    приймає як аргументи масив з полями 'title' і 'price'


class Product {
    public $title;
    public $price;
   
    public function __construct(string $title, Price $price) {
        $this->title = $title;
        $this->price = $price;
    }

    static function arr(array $product) {
        return new static ($product['title'],new Price($product['price']));
    }
}

class Price { 

    public int $price;
    
    //price have to be in coins!
    
    public function __construct(int $price) {
        $this->price = $price;
    }
    
    public function __toString(): string {
        return (string) $this->price / 100 . ' UAH';
    }
        
}

    

$product1 = new Product ('Chiken', new Price (5500));
echo ($product1->title . ' ' . $product1->price . "\n");


$a = array ('title'=>'Apple','price'=>1500);

$product2 = Product::arr ($a);
echo ($product2->title . ' ' . $product2->price . "\n");

