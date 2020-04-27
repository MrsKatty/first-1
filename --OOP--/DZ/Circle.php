<?php

class Circle {
    private $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function length(){
        return 2*pi()*$this->r;
    }

    public function area(){
        return pi() * ($this->r ** 2);
    }
}