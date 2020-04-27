<?php

// if (preg_match('/@/', 'vstu@mail.ru')) {
//     echo 'да';
// }
// else {
//     echo 'нет';
// }



////////////////////////////////////////////////////////

// if (preg_match('/php/i', "PHP is programming language.")) {
//     echo "Вхождение найдено";
// }
// else {
//     echo "Вхождение не найдено";
// }



////////////////////////////////////////////////////////

// $str = 'hypertext3language5programming';
// $cars = preg_split('/\d/', $str);

// print_r($cars);



////////////////////////////////////////////////////////

// $str = 'not to be';

// $pat="/(^be^)|(^not\sto\sbe$)/i";

// if (preg_match($pat, $str)) {
//     echo "Вхождение найдено";
// }else {
//     echo "Вхождение не найдено";
// }


////////////////////////////////////////////////////////

$str = " Всем <b>привет</b> !!!";
$pat = "/<b>.*<\/b>/i";
$rep = "<i>$0</i>";

$str2 = preg_replace($pat, $rep, $str);
echo $str2;

echo "<br>";

$str = " Всем <b>привет</b> !!!";
$pat = "/<b>(.*)<\/b>/i";
$rep = "<i>$1</i>";

$str2 = preg_replace($pat, $rep, $str);
echo $str2;

?>
