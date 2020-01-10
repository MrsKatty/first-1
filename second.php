<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <!-- Альтернативная запись условного оператора -->

    <?php $a = 5;
    if ($a == 5) { ?>
        A is equal to 5
    <?php } ?>

    </br>

    <?php $a = 5;
    if ($a == 5) : ?>
        A is equal to 5
    <?php endif; ?>

    </br>
    </br>

    <?php

    // Циклы

    // for ( $i = 1; $i <= 10; $i++){
    //     echo $i. "<br>";
    // }

    // echo "<br>";

    // for ($i=1; ; $i++) {
    //     if ($i > 10) {
    //     break;
    //     }
    //     echo $i. "<br>";
    // }

    // echo "<br>";

    // $i = 1;
    // for (; ; ) {
    //     if ($i>10) {
    //     break;
    //     }
    //     echo $i. "<br>";
    //     $i++;
    // }

    // echo "<br>";

    // $s=0;
    // for ($i = 1; $i<=10; $i++ ) {
    //     $s = $s + $i;
    // }

    // echo $s;

    // $array = array("one", "two", "three");

    // foreach ($array as $value) {
    //     echo "value: ". $value . "<br>";
    // }


    // $array = array("one", "two", "three");

    // foreach ($array as $key => $value) {
    //     echo "key: " . $key . "; " . "value: ". $value . "<br>";
    // }

    // $s = 0;
    // $array = array(1, 2, 3, 4, 10);
    // foreach ($array as $value) {
    //     $s = $s + $value;
    // }
    // echo $s;

    // $i = 1;
    // while ($i <= 10) {
    //     echo $i++;
    // }

    // echo "<br>";

    // $i = 1;
    // while ($i <= 10) {
    //     echo $i;
    //     $i++;
    // }

    // $s = 0;
    // $i = 1;

    // while ($i <= 10) {
    //     $s = $s + $i;
    //     $i++;
    // }
    // echo $s;

    // $i = 1;
    // $s = 0;
    // do {
    //     $s = $s + $i;
    //     $i++;
    // } while ($i <= 10);
    // echo $s;

    // $i = 3;
    // $p = 1;
    // do {
    //     $p = $p * $i * $i;
    //     $i++;
    // } while ($i <= 12);
    // echo $p;

    // $i = 5;

    // switch ($i) {
    //     case 4 :
    //         echo 4;
    //         break;
    //     case 3 :
    //         echo 3;
    //         break;
    //     default:
    //         echo $i;
    //         break;
    // }

    // $i = 0;

    // switch ($i) {
    //     case 0:
    //         echo "ноль";
    //         break;
    //     case 1:
    //         echo "один";
    //         break;
    //     case 2:
    //         echo "два";
    //         break;
    //     case 3:
    //         echo "три";
    //         break;
    //     case 4:
    //         echo "четыре";
    //         break;
    //     case 5:
    //         echo "пять";
    //         break;
    //     case 6:
    //         echo "шесть";
    //         break;
    //     case 7:
    //         echo "семь";
    //         break;
    //     case 8:
    //         echo "восемь";
    //         break;
    //     case 9:
    //         echo "девять";
    //         break;
    //     default:
    //         echo "нет такого числа";
    //         break;
    // }

    // include "third.php";

    // echo $color . " " .  $fruit;


    ?>

</body>

</html>
