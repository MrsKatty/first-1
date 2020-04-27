<?php
include("Calculator.php");

//создаем экземпляр класса
$calс = new Calculator( //объект
    $_POST['a'],
    $_POST['b']
);

echo "Результат = " . $calс->{$_POST['op']}();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="form.html">Назад</a>
</body>
</html>