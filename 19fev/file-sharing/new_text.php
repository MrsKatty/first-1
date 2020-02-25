<?php

file_put_contents("file/$_POST[old_name]", "$_POST[area]");

header("Location: show.php");

?>
