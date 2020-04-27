<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <form action="vot.php" method="post">


            <?php
            include('config.php');
            $arr = file($file_name);
            ?>

            <h1><?= $arr[0] ?></h1>
            <div class="input">
                <?
                for ($i = 1; $i < count($arr); $i++) {
                    $buf =  explode(" - ", $arr[$i])[0];
                    echo "<div class='radio'><lable><input type='radio' name='vot' value='$i'>$buf</lable><br>\n</div>";
                }

                ?>
            </div>
            <input class="submit" type="submit" value="VOTE">
        </form>
    </div>

</body>

</html>
