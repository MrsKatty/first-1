<?php

include("autoload.php");

$a = new Student("Петр", "Иванов");
echo $a->introduce() . $a->learn();

echo "<br>";

$b = new Teacher("Иван", "Петров");
echo $b->introduce() . $b->teach();

echo "<br>";

$c = new Engeneer("Иван", "Петров");
echo $c->introduce(). $c->work() . $c->learn();