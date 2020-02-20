<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //расчитываем время работы скрипта

    // $time_start = microtime(1);


    // for ($i=0; $i <1000; $i++) {

    // }

    // $time_end = microtime(1);
    // $time = $time_end - $time_start;

    // echo "Ничего не делал $time секунд ";



    // //выводим сегод. дату
    // echo "<pre>";



    // echo $date['month'];

    // echo "<br>";

    // echo $date['weekday'];

    // print_r($date);


    //Выводим сегодняшнюю дату по-русски

    // $date = getdate();
    // $nweek = [
    //     "Fonday" => "понедельник",
    //     "Tuesday" => "вторник",
    //     "Wednesday" => "среда",
    //     "Thursday" => "четверг",
    //     "Friday" => "пятница",
    //     "Saturday" => "суббота",
    //     "Sunday" => "воскресенье"
    // ];

    // $today = $date['weekday'];
    // echo "Сегодня $nweek[$today]";

    // echo "<br>";

    // $date = getdate();
    // $nweek = [
    //     1 => "понедельник",
    //     2 => "вторник",
    //     3 => "среда",
    //     4 => "четверг",
    //     5 => "пятница",
    //     6 => "суббота",
    //     7 => "воскресенье"
    // ];

    // $today = $date['wday'];
    // echo "Сегодня $nweek[$today]";



    // echo date("F j, Y, g:i a") . "<br>";
    // echo date("m.d.y.") . "<br>";
    // echo date("j, n, Y") . "<br>";
    // echo date("Ymd") . "<br>";
    // echo date('h-i-s, j-m-y, it is w day z') . "<br>";
    // echo date('\i\t \i\s \t\h\e JS \d\a\y \y') . "<br>";
    // echo date("D M j G:i:s T Y") . "<br>";
    // echo date("M:m:s \m \i\s \m\o\\n\\t\h") . "<br>";
    // echo date ("H:i:s") . "<br>";


    echo date("M-d-Y", mktime(0,0,0,12,20,2007));
    echo "<br>";

    echo date("M-d-Y", mktime(0,0,0,12,32,2007));
    echo "<br>";

    echo date("M-d-Y", mktime(0,0,0,13,1,2007));
    echo "<br>";

    echo date("M-d-Y", mktime(0,0,0,1,1,2007));
    echo "<br>";

    echo date("M-d-Y", mktime(0,0,0,12,20,07));
    echo "<br>";



    ?>
</body>

</html>
