<?php
    session_start();
    $_SESSION['time'] = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Сессия начата</h2>
    <a href="22.php">Вторая страница</a>
</body>
</html>