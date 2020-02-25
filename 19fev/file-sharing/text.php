<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="new_text.php" method="POST">
        <textarea name="area" id="" cols="50" rows="30"><?= htmlspecialchars(file_get_contents("file/$_GET[old_text]"))?></textarea>
        <br>
        <input type="hidden" name="old_name" value="<?=$_GET['old_text']?>">
        <input type="submit" value="изменить текст">
    </form>

    <br>

    <form action="show.php" method="GET">
    <input type="submit" value="отмена">
    </form>

</body>
</html>

<?php

// print_r($_GET);
// echo $got_text = file_get_contents("file/$_GET[old_text]");

// echo "<pre>";
// print_r($got_text);
// echo "</pre>";

?>
