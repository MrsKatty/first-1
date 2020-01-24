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

    // $a = file ("counter.txt");
    // $a[0] = $a[0] + 1;
    // $c = fopen("counter.txt", "w+");
    // fwrite($c, $a[0]);
    // readfile("counter.txt");



    // $name = "counter.txt";
    // $a = fopen($name, "r");
    // $c = fgets($a);
    // fclose($a);
    // $c +=1;
    // echo $c;
    // $a = fopen($name, "w+");
    // fwrite($a, $c);
    // fclose($a);



    // $c = file_get_contents("counter.txt");
    // echo $c++;
    // file_put_contents("counter.txt", $c);

    echo $a = file_get_contents("counter.txt") + 1;
    file_put_contents("counter.txt", $a);


    ?>
</body>
</html>
