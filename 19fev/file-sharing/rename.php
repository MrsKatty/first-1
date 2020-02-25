<?php

$old_name = $_POST['old_name'];
$arr_old_name = explode(".", $old_name);

$arr_new_name = [$_POST["rename"], $arr_old_name[1]];
$new_name = implode(".", $arr_new_name);

rename("file/$old_name", "file/$new_name");

header("Location: show.php");

?>
