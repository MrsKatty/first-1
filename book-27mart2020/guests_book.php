<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("connect_data_base.php");

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

    <form action="add.php" method="POST">
        <textarea name="text" cols="30" rows="10"></textarea> <br>
        <input type="text" name="name"><br>
        <input type="submit" value="ok">
    </form>

</body>

</html>
