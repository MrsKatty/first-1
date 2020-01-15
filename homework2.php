<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
        $array = array(10, 21, 32, 44, 65, 26);
        $max = null;

        function numb($array, $max) {

            for ($i=0; $i <= count($array) ; $i++) { 
                if ($array[$i] > $max || $max === null) {
                    $max = $array[$i];
                }
            }

            return $max;
        }

        echo numb($array, $max);
    ?>
</body>

</html>