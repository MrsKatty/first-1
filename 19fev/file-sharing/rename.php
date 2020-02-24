<?php

$old_name = file_get_contents("rename.txt");
$new_name = $_POST["rename"];

rename("file/$old_name", "file/$new_name");

header("Location: show.php");

?>