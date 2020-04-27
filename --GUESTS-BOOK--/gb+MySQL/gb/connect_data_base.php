<?php
    $link = mysqli_connect("localhost", "root", "")
        or die("Не удается соединиться с сервером");

    mysqli_select_db($link, "book")
        or die("Не удалось выбрать БД");
?>
