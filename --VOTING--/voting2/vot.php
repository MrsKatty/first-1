<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="vote.css">

</head>

<body>
    <?php

    // получаем результат из формы, разбиваем файл csv на элементы массива и
    // прибавляем к соотв. результату 1 для увеличения голоса

    include('config.php');
    $arr = file($file_name);
    $ind = $_POST['vot'];
    $buf =  explode(" - ", $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(" - ", $buf) . "\n";
    file_put_contents($file_name, $arr);
    ?>

    <?
    //Находим сумму голосов
    $sum = 0;
    for ($i = 1; $i < count($arr); $i++) {
        $sum = $sum + explode(" - ", $arr[$i])[1];
    }
    ?>
    <div class="container">
        <div class="main">

            <h1><?= $arr[0] ?></h1>

            <div class="answers">

                <?
                // Вывод результата в процентах
                for ($i = 1; $i < count($arr); $i++) {
                    $buf = explode(" - ", $arr[$i]);
                    $result = round(($buf[1] / $sum * 100), 2);
                    echo "<div class='line' style='width: {$result}px'></div><br> $buf[0] - $result %<br>";
                }

                ?>
            </div>

        </div>
    </div>
</body>

</html>
