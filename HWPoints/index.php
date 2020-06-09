<?php

include 'src/autoload.php';

use Point\Point;
//use Point\Line;
use Point\Square;
use Point\Triangle;

$startPoint = new Point();
$endPoint = new Point();

$startPoint
    ->setX(3)
    ->setY(4);

$endPoint
    ->setX(8)
    ->setY(10);

// $line = new Line();

// $line
//     ->setStartPoint($startPoint)
//     ->setEndPoint($endPoint);

// $startPoint
//     ->setX(0)
//     ->setY(0);


// echo $line->getLength();

//$square = new Square();

//$square
//->setStartPoint($startPoint)
//->setEndPoint($endPoint);

//echo $square->getPerimeter();

$triangle = new Triangle();

$triangle
    ->setStartPoint($startPoint)
    ->setEndPoint($endPoint);

    echo $triangle->getArea();
