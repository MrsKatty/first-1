<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    tr,
    td {
        border: 1px solid black;
    }

    table {
        border-collapse: collapse;
        width: 300px;
    }

    td {
        text-align: center;
    }
</style>

<body>

    <?php

    include('connect_mysql.php');

    $query = mysqli_query($link, "SELECT * FROM TABLE1");

    echo "<table>";

    while ($arr = mysqli_fetch_array($query, MYSQLI_NUM)) {
        echo "<tr>";
        echo "<td>" . "<a href='delete.php?id=$arr[0]'>" . $arr[0] ."</a>" . "</td>";
        echo "<td>" . $arr[1] . "</td>";
        echo "<td>" . $arr[2] . "</td>";
        echo "</tr>";
    }

    echo "</table>\n";

    mysqli_free_result($query);
    mysqli_close($link);


    ?>

    <br>

    <form action="add.php" method="POST">
        <textarea name="text" cols="30" rows="10"></textarea><br>
        <input type="text" name="name"><br>
        <input type="submit" value="отправить">
    </form>


</body>

</html>