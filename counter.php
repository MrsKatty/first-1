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
    $a = file ("counter.txt");
    $a[0] = $a[0] + 1;
    $c = fopen("counter.txt", "w+");
    fwrite($c, $a[0]);
    readfile("counter.txt");



    //Сбрасываем счетчик на 0

    $fp = fopen ("counter.txt", "w+");
    fwrite ($fp, 0);
    fclose($fp);

    ?>
</body>
</html>
