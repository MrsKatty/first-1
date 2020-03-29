<?php

include("connect_mysql.php");

$result = mysqli_query($link, "INSERT INTO table1 VALUES (NULL, '$_POST[text]', '$_POST[name]')");

mysqli_close($link);

header('location: form.php');