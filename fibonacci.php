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

// function fib($n) {
//     $res = array(1,1);
//     for( $i=0; $i < ($n-2); $i++ ){
//             $cur = $res[$i] + $res[$i+1];
//             array_push( $res, $cur );
//     }
//     return implode(", ",$res);
// }

// echo fib(5) ;


function fibo($n) {
    $f = [0,1];
    for ($i = 1; $i < $n; $i++) {
        $f[] = $f[$i] + $f [$i - 1];
    }
    return $f;
}
echo "<pre>";
print_r(fibo(5));


?>
</body>
</html>
