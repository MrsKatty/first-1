<?php

class Calculator //класс
{
    private $a; // поля/свойства
    private $b; // поля/свойства

    public function __construct($a, $b) //конструктор
    {
        
        $this->a = $a;
        $this->b = $b;
    }

    public function sum()  //метод
    { 
        return $this->a + $this->b;
    }

    public function mul()  //метод
    { 
        return $this->a * $this->b;
    }

    public function dif()  //метод
    { 
        return $this->a - $this->b;
    }

    public function div()  //метод
    { 
        return $this->a / $this->b;
    }
}
