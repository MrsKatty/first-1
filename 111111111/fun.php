<?php

// function div1($a, $b)
// {
//     return $a / $b;
// }

//  //мягкая типизация
// function div2(int $a, int $b): float
// {
//     return $a / $b;
//}



 //упаковка аргументов в массив

 function sum1(...$params){
     $s = 0;
     foreach ($params as $value) {
         $s +=$value;
     }
     return $s;
 }

 function sum2(int ...$params){
    $s = 0;
    foreach ($params as $value) {
        $s +=$value;
    }
    return $s;
}