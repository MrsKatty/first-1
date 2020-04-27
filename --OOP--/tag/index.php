<?php

include 'autoload.php';

$a = new A();

echo $a->clear()
    ->href('https://www.tut.by')
    ->innerText('tut')
    ->class('btn')
    ->id('bt')
    ->style('color:red')
    ->html();

echo"<br>";

echo $a
    ->clear()
    ->href('https://www.onliner.by')
    ->innerText('onliner')
    ->html();

echo"<br>";

$h= new H(0.5);

echo $h
    ->innerText('header')
    ->class('btn')
    ->id('bt')
    ->style('color:red')
    ->html();

$table = new Table();
    echo $table->clear()
    ->style('border: 1px solid black')
    ->data([
        [1, 2, 3],
        [4, 5, 6]
    ])
    ->html();