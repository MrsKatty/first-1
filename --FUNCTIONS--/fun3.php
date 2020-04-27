<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php

    // $input = array( 5 , 10);
    // function take_array ($input)
    // {
    //     echo '$input[0] + $input[1] = ' , $input[0] + $input[1];
    // }

    // take_array ($input);



    // $input = array( 1, 2, 3, 4, 5, 6);

    // function mul($input)
    // {
    //    for($i = 0; $i < count($input); $i++) {
    //     $input[$i] = $input[$i] * 2;
    //    }

    //    return $input;
    // }

    // print_r(mul($input));

    // $a = 9;
    // $b = 54;
    // $c = 84;


    // function number($a, $b, $c)
    // {
    //     if ($a > $b) {
    //         $max = $a;
    //     }
    //     else {
    //         $max = $b;

    //     }

    //     if ($c > $max) {
    //         $max = $c;
    //     }

    //     return $max;
    // }

    // echo number($a, $b, $c);

    // $a = 401;
    // $b = 58;
    // $c = 12;
    // $d = 9;


    // function number($a, $b, $c, $d)
    // {
    //     if ($a > $b) {
    //         $max = $a;
    //     }
    //     else {
    //         if ($b> $c) {
    //         $max = $b;
    //         }

    //         else {
    //             $max = $c;
    //         }
    //     }

    //     if ($d > $max) {
    //         $max = $d;
    //     }

    //     return $max;
    // }

    // echo number($a, $b, $c, $d);


    // function number($n)
    // {
    //     $f = 1;
    //     for ($i = 1; $i <= $n; $i++) {
    //         $f = $f *  $i;
    //     }

    //     return $f;
    // }

    // echo number(0);
    // echo "<br>";
    // echo number(1);
    // echo "<br>";
    // echo number(2);
    // echo "<br>";
    // echo number(3);
    // echo "<br>";
    // echo number(4);
    // echo "<br>";


    //РЕКУРСИЯ

    // function number($n) {

    //     if ($n === 0) {
    //         $f = 1;
    //     }

    //     else {
    //         $f = number($n - 1) * $n;
    //     }

    //     return $f;

    // }

    // echo  number(0);
    // echo "<br>";
    // echo  number(1);
    // echo "<br>";
    // echo  number(2);
    // echo "<br>";
    // echo  number(3);
    // echo "<br>";
    // echo  number(4);


    //передача значения по ссылке

    // function plus(&$string) {
    //     $string .= ' + Петя';
    // }

    // $str = 'Ира';
    // plus($str);
    // echo $str;


    //Значение по умолчанию

    // function makecoffe($type = "cappucino") {
    //     return "Making a cup of $type.\n";
    // }
    //  echo makecoffe();
    //  echo makecoffe("expresso");

    // $a = 1;

    // function test() {
    //     echo $a;
    // }

    // test();

    // $a = 1;
    // $b = 2;

    // function sum()
    // {
    //     global $a, $b;
    //     $b = $a + $b;
    // }
    // sum();
    // echo $b;


    // function test() {
    //     static $a = 0;
    //     echo $a;
    //     $a++;
    // }

    // test();
    // echo $a;
    // echo "<br>";
    // test();
    // echo $a;
    // echo "<br>";
    // test();
    // echo $a;


    $array = array(
        1 => "Иванов",
        2 => "Петров",
        3 => "Сидоров",
    );

    function table($array) {
        $str = "<table>\n";
        foreach ($array as $key => $value) {

            $str .= "\t<tr>\n\t\t<td>$key</td>\n\t\t<td>$value</td>\n\t</tr>\n";
        }
        $str .= "</table>";
        return $str;
    }
    echo table($array);




    ?>
</body>

</html>
