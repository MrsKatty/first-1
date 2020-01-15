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

    // $input = array( 5 , 10);
    // function take_array ($input)
    // {
    //     echo '$input[0] + $input[1] = ' , $input[0] + $input[1];
    // }

    // take_array ($input);



    // $input = array( 1, 2, 3, 4, 5, 6);

    // function mul($input)
    // {
    //    for($i = 0; $i < count($input); $i++) {
    //     $input[$i] = $input[$i] * 2;
    //    }

    //    return $input;
    // }

    // print_r(mul($input));

    // $a = 9;
    // $b = 54;
    // $c = 84;
    

    // function number($a, $b, $c)
    // {
    //     if ($a > $b) {
    //         $max = $a;
    //     } 
    //     else {
    //         $max = $b;
            
    //     }

    //     if ($c > $max) {
    //         $max = $c;
    //     }
    
    //     return $max;
    // }

    // echo number($a, $b, $c);

    $a = 401;
    $b = 58;
    $c = 12;
    $d = 9;
    

    function number($a, $b, $c, $d)
    {
        if ($a > $b) {
            $max = $a;
        } 
        else {
            if ($b> $c) {
            $max = $b;
            }

            else {
                $max = $c;
            }
        }

        if ($d > $max) {
            $max = $d;
        }
    
        return $max;
    }

    echo number($a, $b, $c, $d);

    ?>
</body>

</html>
