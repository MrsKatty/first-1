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
    $a = fopen ("counter.txt", "w+");
    $b = $a + 1;
    fwrite ($a, $b);


    ?>
</body>
</html>
