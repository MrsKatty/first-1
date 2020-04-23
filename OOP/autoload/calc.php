<?php
include("autoload.php");

//создаем экземпляр класса
$calс = new Calculator( //объект
    $_POST['a'],
    $_POST['b']
);

echo $calс->{$_POST['op']}();