<?php

include 'autoload.php';

function test($str1, $str2, $text ='')
{
    if ($str1 == $str2) {
        echo "Тест $text пройден\n";
    } else {
        echo "Тест $text не пройден\n $str1 == $str2\n";
    }
}

$img = new Img();

test(
    "<img src='1.jpg'>",
    $img->setSrc('1.jpg')->html(),
    "Img"
);

test(
    "<img src='2.jpg' height='100' width='100'>",
    $img->setSrc('2.jpg')->setWidth(100)->setHeight(100)->html(),
    "Img"
);

$br = new Br();

test(
    "<br>",
    $br->html(),
    "br"
);
