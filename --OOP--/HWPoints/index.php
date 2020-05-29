<?php

include 'src/autoload.php';

use Point\Point;
use Point\Line;

$startPoint = new Point();
$endPoint = new Point();

$startPoint
    ->setX(4)
    ->setY(7);

$endPoint
    ->setX(3)
    ->setY(5);

$line = new Line();

$line
    ->setStartPoint($startPoint)
    ->setEndPoint($endPoint);
    
$startPoint
    ->setX(0)
    ->setY(0);


echo $line->getLength();


