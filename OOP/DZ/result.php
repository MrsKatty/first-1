<?php

include("autoload.php");

// include("Triangle.php");
// include("Circle.php");


$result_t = new Triangle(10,10);

echo "Периметр прямоугольного треугольника = " .  $result_t->perimeter();
echo "<br>";
echo "Площадь прямоугольного треугольника = " . $result_t->area();
echo "<br>";

$result_c = new Circle(10);

echo "Длина окружности = " .  $result_c->length();
echo "<br>";
echo "Площадь круга = " . $result_c->area();