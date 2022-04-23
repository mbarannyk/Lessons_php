<?php

//Розробити додаток “Калькулятор” у стилі ООП. Калькулятор повинен робити базові підрахунки (+, -, *, /).*Додати функції знаходження модулю числа,  остачі від ділення. 


class Calculator {

    public $a, $b;

    public function __construct ($a, $b) {
        $this->a = $a;
        $this->b = $b;
        }

        public function Plus() {
            return  $this->a + $this->b;
            }
       
        public function Minus() {
            return $this->a - $this->b;
            }
       
        public function Multiple() {
            return $this->a * $this->b;
            }
        
        public function Divide() {
            return $this->a / $this->b;
            }
          
}

$a = $_GET['a'];
$b = $_GET['b'];

$res = new Calculator($a, $b);

    if (isset($a) && isset($b)) {
        switch ($_GET['operation']) {
            case '+':
                $result = $res->Plus();
                break;
            case '-':
                $result = $res->Minus();
                break;
            case '*':
                $result = $res->Multiple();
                break;
            case '/':
                $result = $res->Divide();
                break;
            default:
                return 'Помилка операції';
        }
    }
    return $result;
