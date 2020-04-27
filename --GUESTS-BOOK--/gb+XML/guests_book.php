<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include ("fun_guests_book.php");
        save_guests_book("guests_book.xml", $_POST['mess'], $_POST['name'], date('d-m-y h:i:s'));

        $arr = read_guests_book("guests_book.xml");

         foreach ($arr as $value) {
            echo $value['name'] . $value['date'] . $value['text'];
        }
    ?>
</body>

</html>
