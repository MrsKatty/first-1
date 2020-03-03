<?php
$arr_words = file('words.txt');

foreach ($arr_words as &$word) {
   $word = trim($word);
}
$words = implode('|',$arr_words);

if (preg_match("/$words/ui", $_POST['filtr'])) {
    echo "Не ругайся!";
}else {
    echo "Молодец!";
}

?>
