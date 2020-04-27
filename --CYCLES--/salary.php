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

    $money = 2000;
    $intYear = 11.5;
    $month = 14;

    // for ($i= 1; $i <= $month; $i++) {
    //     $money = $money + ($money * ($intYear / 12 / 100));
    // }

    // echo $money;

    // $i = 1;
    // while ($i <= $month) {
    //     $money = $money + ($money * ($intYear / 12 / 100));
    //     $i++;
    // }
    // echo $money;

    $i = 1;
    do {
        $money = $money + ($money * ($intYear / 12 / 100));
        $i++;
    } while ($i <= $month);

    echo $money;

    ?>
</body>

</html>
