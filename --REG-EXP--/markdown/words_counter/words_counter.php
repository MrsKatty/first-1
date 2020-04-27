<?php

$site = file_get_contents($_POST['link']);

preg_match_all("/\w+/ui", $site, $all_words);


foreach ($all_words[0] as $word) {
    $arr[$word]++;
}

arsort($arr);

foreach ($arr as $key => $value ) {
    echo $key . " - " . $value . "<br>";
}