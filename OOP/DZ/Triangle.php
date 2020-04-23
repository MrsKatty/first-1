<?php

class Triangle
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function perimeter()
    {
        $c = ((($this->a ** 2) + ($this->b ** 2)) ** 0.5);
        return $c + $this->a + $this->b;
    }

    public function area()
    {
        return ($this->a * $this->b) / 2;
    }
}
