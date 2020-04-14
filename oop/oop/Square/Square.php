<?php

class Square{

    private $a; // поля/свойства

    public function __construct($a) //конструктор
    {
        
        $this->a = $a;
    }

    public function perimeter()  //метод
    { 
        return $this->a * 4;
    }

    public function area()  //метод
    { 
        return $this->a ** 2;
    }
}