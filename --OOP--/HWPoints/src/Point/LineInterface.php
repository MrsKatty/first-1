<?php

namespace Point;

interface LineInterface

{

    public function startPoint(int $StartX, int $StartY):object;
  

    public function endPoint(int $EndX, int $EndY):object;
   

    public function getLength();
  
}
