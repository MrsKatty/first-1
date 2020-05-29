<?php

use W1019\DbTable;

include "src/autoload.php";

$table = new DbTable(
    new mysqli(
        "localhost",
        "root",
        "",
        "db124"
    ),
    "table124"
);



// echo $table->add(["text" => "Привет", "name" => "Вася"]);
// echo $table->add(["text" => "hi", "name" => "slava"]);
// echo $table->add(["text" => "привет", "name" => "Сергей"]);
// $table->edit(1, ["text" => "Hi", "name" => "Антоша"]);
$table->del(5);

print_r($table->get());