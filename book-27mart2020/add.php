<?php

include("connect_data_base.php");

if (!empty($_POST['text']) && !empty($_POST['name'])) {
    mysqli_query(
        $link,
        "INSERT INTO table1 VALUES(NULL, '$_POST[text]', '$_POST[name]' )"
    );
}
mysqli_close($link);
header('Location: guests_book.php');
