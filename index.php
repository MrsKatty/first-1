<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My new site</title>
</head>

<body>
    <?php
    echo "Hello World!";


    $a = 5;
    $b = 1;
    $c = $a << $b;

    echo "<br>";
    echo $c;

    echo "<br>";

    $bool = true;
    $str = "foo";
    $int = 12;

    echo gettype($bool);

    echo "<br>";

    echo gettype($str);

    echo "<br>";

    echo gettype($int);


    //Если это целое,  увеличить на четыре

    if (is_int($int)) {
        $int += 4;
    }


    // если $bool это  строка то вывести ее
    // (ничего не выводит)

    if (is_string($bool)) {

        echo "Строка : $bool";
    }

    echo "<br>";


    $a = 1234;

    echo $a;

    echo "<br>";

    $a = -1234;
    echo $a;

    echo "<br>";

    $a = 1.2e3;

    echo $a;
    echo "<br>";

    $b = 7E-10;
    echo $b;


    echo "<br>";
    echo 'Чтобы вывести \' нужно поставить \\';

    echo "<br>";
    echo 'это не вставит: \n новую строку';

    echo "<br>";

    $a = 3;
    echo "\$a=$a";

    echo "<br>";

    echo "ковычка \" \n ковычка ";

    ?>
</body>

</html>
