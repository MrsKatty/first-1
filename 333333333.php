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

    // file_put_contents("file.txt", file_get_contents("https://ru.wikipedia.org/wiki/%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0"));





    //обработка без секции

    $ini_array = parse_ini_file("file.ini");
    echo "<pre>";
    print_r($ini_array);

    //обработка c секцией

    $ini_array = parse_ini_file("file.ini", true);
    print_r($ini_array);



    ?>
</body>
</html>
