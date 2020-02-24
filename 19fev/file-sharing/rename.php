<?php

$old_name = file_get_contents("rename.txt");
$arr_old_name = explode(".", $old_name);

$arr_new_name = [$_POST["rename"], $arr_old_name[1]];
$new_name = implode(".", $arr_new_name);

rename("file/$old_name", "file/$new_name");

header("Location: show.php");

?>