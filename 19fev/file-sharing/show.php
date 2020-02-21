<?php

$arr = scandir("file");

 for ($i=2; $i < count($arr); $i++) {

    switch (explode(".", $arr[$i])[1]) {
        case 'docx':
            $icon = 'img/docx.png';
            break;
        case 'pdf':
            $icon = 'img/pdf.png';
            break;
        default:
            $icon = 'img/sm.png';
            break;
    }
    $filesize = round(((filesize("file\\$arr[$i]")) / 1024)  / 1024 , 3) . "mb";

    echo "<a href='file\\$arr[$i]'><img src='$icon' width='16' height='16'>$arr[$i]</a>$filesize
    <a href='delete.php?file=$arr[$i]'><img src='img/cross.jpg' width='16' height='16'></a><br> ";
 }
