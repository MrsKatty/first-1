<?php
    $link = mysqli_connect("localhost", "root", "")
        or die("Не удается соединиться с сервером");

    mysqli_select_db($link, "book")
        or die("Не удалось выбрать БД");

    //mysqli_query(" SET NAMES 'cp1251'");

    if (!empty($_POST['text']) && !empty($_POST['name'])) {
        mysqli_query(
            $link,
            "INSERT INTO table1 VALUES(NULL, '$_POST[text]', '$_POST[name]' )"
        );
        header('Location: test.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $result = mysqli_query(
        $link,
        "SELECT * from table1"
    ) or die("не удалось выполнить запрос");

    echo "<table border='1'>\n";

    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "</tr>";
    }

    echo "</table>\n";
    mysqli_free_result($result);
    mysqli_close($link);
    ?>

    <form action="?" method="POST">
        <textarea name="text" cols="30" rows="10"></textarea> <br>
        <input type="text" name="name"><br>
        <input type="submit" value="ok">
    </form>

</body>

</html>
