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
    $ind = $_POST['vot'];
    $arr = file("file.csv");
    $buf =  explode(" - ", $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(" - ", $buf) . "\n";
    file_put_contents("file.csv", $arr);
    ?>

    <!-- <div style="width: 0cm"></div> -->

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

                for ($i = 1; $i < count($arr); $i++) {
                    $buf = explode(" - ", $arr[$i]);
                    echo "<div class=\"line\" style=\"width: ".($buf[1] / $sum * 100)."px\"></div>" . "<br>" . $buf[0] . " - " . round(($buf[1] / $sum * 100), 2) . "% " . "<br>";
                    echo "<img src=\"1px.png\" height=\"10\" width=".($buf[1] / $sum * 100).">". "<br>";
                }

                ?>
            </div>

        </div>
    </div>
</body>

</html>