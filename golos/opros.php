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
        $result = explode(";","opros.txt");
        switch ($_POST['voting']) {
             case 'yes':
                $result[0] = $result[0] + 1;
                 break;
             case 'non':
                $result[1] = $result[1] + 1;
                break;
             case 'dknow':
                $result[2] = $result[2] + 1;
                 break;
        $ok = implode(";",$result);
        file_put_contents("calc.txt", $ok);
    ?>
</body>

</html>
