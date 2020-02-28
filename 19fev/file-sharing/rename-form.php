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
    $name = (explode(".", $_GET['rename']))[0];
    ?>

    <form action="rename.php" method="post">
        <p>Введите новое имя файла</p>
        <input type="text" name="rename" value="<?= $name ?>">
        <input type="submit" value="Переименовать">
        <input type="hidden" name="old_name" value="<?= $_GET['rename'] ?>">
    </form>
</body>

</html>
