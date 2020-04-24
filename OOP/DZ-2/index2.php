<?php

include 'autoload.php';

$b = new B('papapa');

echo $b
    ->setInnerText('Hello World')
    ->setClass("color")
    ->setId("12345")
    ->html();

$i = new I();

echo $i
    ->setInnerText('Hello World')
    ->html();

$u = new U();

echo $u
    ->setInnerText('Hello World')
    ->html();

$ul = new UL();

echo $ul
    ->setId('sp2')
    ->setInnerData([1, 2, 3])
    ->setType("circle")
    ->html();

$ol = new OL();

echo $ol
    ->setId('sp2')
    ->setInnerData(["a", "b", "c"])
    ->setType("asd")
    ->html();


$select = new Select();

echo $select
->setId('id1')
->setName('select')
->setInnerData([1,2,3])
->html();

$form = new Form();

echo $form
->setContent('отправить')
->setAction('1.php')
->setMethod('POST')
->setCols(30)
->setRows(10)
->setFormData([
    'text'=>'input',
    'radio'=>'input',
    'password'=>'input',
    'textarea', 
    'submit'=>'button'])
->html();