<?php

include("connect_mysql.php");

$del = "DELETE FROM table1 where id='$_GET[id]'";

$query = mysqli_query($link, $del);

mysqli_close($link);

header("location: form.php");