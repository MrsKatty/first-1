<?php
$words = $_POST['text'];
preg_match_all("/\w+/ui" ,$words, $match);


foreach ($match[0] as $word) {
    $arr[$word]++;
}

foreach ($arr as $value => $key) {
    echo $value . " - " . $key . "<br>";
}
