<?php

namespace Point;

class Line implements LineInterface
{
    private $StartX;
    private $StartY;
    private $EndX;
    private $EndY;

    public function startPoint(int $StartX, int $StartY): object
    {
        $this->StartX = $StartX;
        $this->Starty = $StartY;
        return $this;
    }


    public function endPoint(int $EndX, int $EndY): object
    {
        $this->EndX = $EndX;
        $this->EndY = $EndY;
        return $this;
    }


    public function getLength()
    {
        return sqrt(
            (($this->EndX - $this->StartX) ** 2) +
                (($this->EndY - $this->StartY) ** 2)
        );
    }
}
