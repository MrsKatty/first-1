<?php

include("connect_mysql.php");

if (!empty($_POST['text']) && !empty($_POST['name'])) {
    mysqli_query($link, "INSERT INTO table1 VALUES (NULL, '$_POST[text]', '$_POST[name]')");
}



mysqli_close($link);

header('location: form.php');