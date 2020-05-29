<?php

namespace Point;

class Point implements PointInterface
{

    private $x;
    private $y;

    public function setX(int $x): object
    {
        $this->x = $x;
        return $this;
    }

    public function setY(int $y): object
    {
        $this->y = $y;
        return $this;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
}
