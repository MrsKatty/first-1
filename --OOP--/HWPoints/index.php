<?php

include 'src/autoload.php';

use Point\Point;
use Point\Line;

$point = new Point;
$line = new Line;

echo $line->startPoint(
    $point->setX(1)->getX(),
    $point->setY(1)->getY()
)->endPoint(
    $point->setX(2)->getX(),
    $point->setY(1)->getY()
)->getLength();


