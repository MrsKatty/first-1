<?php

$link = mysqli_connect("localhost", "root", "")
or die ("Не удалось подключиться к серверу");

mysqli_select_db($link , "book") 
or die ("Не удалось подключиться к базе данных");