<?php

namespace Point;

interface PointInterface {

    public function setX(int $x): object;

    public function setY(int $y): object;

    public function getX();

    public function getY();
}