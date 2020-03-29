<?php

$str = "<p>Слава</p><p>передает</p><p>всем</p><p>друзьям</p><p>привет</p>";
$pattern = "/<p>(.*?)<\/p>/";

preg_match_all($pattern, $str, $arr, PREG_PATTERN_ORDER);

//echo "<pre>";
//print_r($arr);

// $str = "<p>Слава</p><p>передает</p><p>всем</p><p>друзьям</p><p>привет</p>";
// $pattern = "/<p>(.*?)<\/p>/";

// preg_match_all($pattern, $str, $arr, PREG_SET_ORDER);

//echo "<pre>";
//print_r($arr);

echo $arr[1][0] . " " .  $arr[1][1] . " " .  $arr[1][2] . " " .  $arr[1][3] . " " .  $arr[1][4];