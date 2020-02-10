<?php
header("Content-Type: text/plain");
$html = file("https://www.php.net/manual/ru/function.fopen.php");
foreach ($html as $key => $value) {
    echo $key. "|" . $value;
}
?>
