<?php

include('connect.php');

$result = $mysqli->query(
    "INSERT INTO table1 VALUE (NULL,'$_POST[text]', '$_POST[name]')"
);

$mysqli->close();

header('location: db.php');